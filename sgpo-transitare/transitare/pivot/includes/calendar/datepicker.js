/*
 * Date picker plugin for jQuery
 * http://kelvinluck.com/assets/jquery/datePicker
 *
 * Copyright (c) 2006 Kelvin Luck (kelvinluck.com)
 * Licensed under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 *
 * $LastChangedDate: 2007-04-12 10:01:01 +0100 (Thu, 12 Apr 2007) $
 * $Rev: 1672 $
 */
jQuery.datePicker = function()
{
	// so that firebug console.log statements don't break IE
	if (window.console == undefined) { window.console = {log:function(){}}; }

	var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	var navLinks = {p:'Prev', n:'Next', c:'Close', b:'Choose date'};
	var dateFormat = 'dmy';
	var dateSeparator = "/";
	var _drawingMonth = false;
	var _firstDayOfWeek;
	var _firstDate;
	var _lastDate;

	var _selectedDate;
	var _openCal;

	var _zeroPad = function(num) {
		var s = '0'+num;
		return s.substring(s.length-2)
		//return ('0'+num).substring(-2); // doesn't work on IE :(
	};
	var _strToDate = function(dIn)
	{
		switch (dateFormat) {
			case 'ymd':
				dParts = dIn.split(dateSeparator);
				return new Date(dParts[0], Number(dParts[1])-1, dParts[2]);
			case 'dmy':
				dParts = dIn.split(dateSeparator);
				return new Date(dParts[2], Number(dParts[1])-1, Number(dParts[0]));
			case 'dmmy':
				dParts = dIn.split(dateSeparator);
				for (var m=0; m<12; m++) {
					if (dParts[1].toLowerCase() == months[m].substr(0,3).toLowerCase())  {
						return new Date(Number(dParts[2]), m, Number(dParts[0]));
					}
				}
				return undefined;
			case 'mdy':
			default:
				var parts = parts ? parts : [2, 1, 0];
				dParts = dIn.split(dateSeparator);
				return new Date(dParts[2], Number(dParts[0])-1, Number(dParts[1]));
		}
	};
	var _dateToStr = function(d)
	{
		var dY = d.getFullYear();
		var dM = _zeroPad(d.getMonth()+1);
		var dD = _zeroPad(d.getDate());
		switch (dateFormat) {
			case 'ymd':
				return dY + dateSeparator + dM + dateSeparator + dD;
			case 'dmy':
				return dD + dateSeparator + dM + dateSeparator + dY;
			case 'dmmy':
				return dD + dateSeparator + months[d.getMonth()].substr(0,3) + dateSeparator + dY;
			case 'mdy':
			default:
				return dM + dateSeparator + dD + dateSeparator + dY;
		}
	};

	var _getCalendarDiv = function(dIn)
	{
		var today = new Date();
		if (dIn == undefined) {
			// start from this month.
			d = new Date(today.getFullYear(), today.getMonth(), 1);
		} else {
			// start from the passed in date
			d = dIn;
			d.setDate(1);
		}
		// check that date is within allowed limits:
		if ((d.getMonth() < _firstDate.getMonth() && d.getFullYear() == _firstDate.getFullYear()) || d.getFullYear() < _firstDate.getFullYear()) {
			d = new Date(_firstDate.getFullYear(), _firstDate.getMonth(), 1);;
		} else if ((d.getMonth() > _lastDate.getMonth() && d.getFullYear() == _lastDate.getFullYear()) || d.getFullYear() > _lastDate.getFullYear()) {
			d = new Date(_lastDate.getFullYear(), _lastDate.getMonth(), 1);;
		}

		var jCalDiv = jQuery("<div></div>").attr('class','popup-calendar');
		var firstMonth = true;
		var firstDate = _firstDate.getDate();

		// create prev and next links
		var prevLinkDiv = '';
		if (!(d.getMonth() == _firstDate.getMonth() && d.getFullYear() == _firstDate.getFullYear())) {
			// not in first display month so show a previous link
			firstMonth = false;
			var lastMonth = d.getMonth() == 0 ? new Date(d.getFullYear()-1, 11, 1) : new Date(d.getFullYear(), d.getMonth()-1, 1);
			var prevLink = jQuery("<a></a>").attr('href', 'javascript:;').html(navLinks.p).click(function()
			{
				jQuery.datePicker.changeMonth(lastMonth, this);
				return false;
			});
			prevLinkDiv = jQuery("<div></div>").attr('class','link-prev').html('&lt;').append(prevLink);
		}

		var finalMonth = true;
		var lastDate = _lastDate.getDate();
		nextLinkDiv = '';
		if (!(d.getMonth() == _lastDate.getMonth() && d.getFullYear() == _lastDate.getFullYear())) {
			// in the last month - no next link
			finalMonth = false;
			var nextMonth = new Date(d.getFullYear(), d.getMonth()+1, 1);
			var nextLink = jQuery("<a></a>").attr('href', 'javascript:;').html(navLinks.n).click(function()
			{
				jQuery.datePicker.changeMonth(nextMonth, this);
				return false;
			});
			nextLinkDiv = jQuery("<div></div>").attr('class','link-next').html('&gt;').prepend(nextLink);
		}

		var closeLink = jQuery("<a></a>").attr('href','javascript:;').html(navLinks.c).click(function()
		{
			jQuery.datePicker.closeCalendar();
		});

		jCalDiv.append(
			jQuery("<div></div>").attr('class', 'link-close').append(closeLink),
			jQuery("<h3></h3>").html(months[d.getMonth()] + ' ' + d.getFullYear())
		);
		var headRow = jQuery("<tr></tr>");
		for (var i=_firstDayOfWeek; i<_firstDayOfWeek+7; i++) {
			var weekday = i%7;
			var day = days[weekday];
			headRow.append(
				jQuery("<th></th>").attr({'scope':'col', 'abbr':day, 'title':day, 'class':(weekday == 0 || weekday == 6 ? 'weekend' : 'weekday')}).html(day.substr(0, 1))
			);
		}

		var tBody = jQuery("<tbody></tbody>");

		var lastDay = (new Date(d.getFullYear(), d.getMonth()+1, 0)).getDate();
		var curDay = _firstDayOfWeek - d.getDay();
		if (curDay > 0) curDay -= 7;

		var todayDate = (new Date()).getDate();
		var thisMonth = d.getMonth() == today.getMonth() && d.getFullYear() == today.getFullYear();

		var w = 0;
		while (w++<6) {
			var thisRow = jQuery("<tr></tr>");
			for (var i=0; i<7; i++) {
				var weekday = (_firstDayOfWeek + i) % 7;
				var atts = {'class':(weekday == 0 || weekday == 6 ? 'weekend ' : 'weekday ')};

				if (curDay < 0 || curDay >= lastDay) {
					dayStr = ' ';
				} else if (firstMonth && curDay < firstDate-1) {
					dayStr = curDay+1;
					atts['class'] += 'inactive';
				} else if (finalMonth && curDay > lastDate-1) {
					dayStr = curDay+1;
					atts['class'] += 'inactive';
				} else {
					d.setDate(curDay+1);
					var dStr = _dateToStr(d);
					dayStr = jQuery("<a></a>").attr({'href':'javascript:;', 'rel':dStr}).html(curDay+1).click(function(e)
					{
						jQuery.datePicker.selectDate(jQuery.attr(this, 'rel'), this);
						return false;
					})[0];
					if (_selectedDate && _selectedDate==dStr) {
						jQuery(dayStr).attr('class','selected');
					}
				}

				if (thisMonth && curDay+1 == todayDate) {
					atts['class'] += 'today';
				}
				thisRow.append(jQuery("<td></td>").attr(atts).append(dayStr));
				curDay++;
			}
			tBody.append(thisRow);
		}

		jCalDiv.append(
			jQuery("<table></table>").attr('cellspacing',2).append("<thead></thead>")
			.find("thead").append(headRow).parent().append(tBody.children())
		).append(prevLinkDiv).append(nextLinkDiv);

		if (jQuery.browser.msie) {

			// we put a styled iframe behind the calendar so HTML SELECT elements don't show through
			var iframe = [	'<iframe class="bgiframe" tabindex="-1" src="blank.html" ',
		 					'style="display:block; position:absolute;',
							'top: 0;',
							'left:0;',
							'z-index:-1; filter:Alpha(Opacity=\'0\');',
							'width:3000px;',
							'height:3000px"/>'].join('');
			jCalDiv.append(document.createElement(iframe));
		}

		jCalDiv.css({'display':'block'});
		return jCalDiv[0];
	};
	var _draw = function(c)
	{
		// explicitly empty the calendar before removing it to reduce the (MASSIVE!) memory leak in IE
		// still not perfect but a lot better!
		// Strangely if you chain the methods it reacts differently - when chained opening the calendar on
		// IE uses a bunch of memory and pressing next/prev doubles this memory. When you close the calendar
		// the memory is freed. If they aren't chained then pressing next or previous doesn't double the used
		// memory so only one chunk of memory is used when you open the calendar (which is also freed when you
		// close the calendar).
		jQuery('div.popup-calendar a', _openCal[0]).unbind();
		jQuery('div.popup-calendar', _openCal[0]).empty();
		jQuery('div.popup-calendar', _openCal[0]).remove();
		_openCal.append(c);
	};
	var _closeDatePicker = function()
	{
		jQuery('div.popup-calendar a', _openCal).unbind();
		jQuery('div.popup-calendar', _openCal).empty();
		jQuery('div.popup-calendar', _openCal).css({'display':'none'});

		/*
		if (jQuery.browser.msie) {
			_openCal.unbind('keypress', _handleKeys);
		} else {
			jQuery(window).unbind('keypress', _handleKeys);
		}
		*/
		jQuery(document).unbind('mousedown', _checkMouse);
		delete _openCal;
		_openCal = null;
	};
	var _handleKeys = function(e)
	{
		var key = e.keyCode ? e.keyCode : (e.which ? e.which: 0);
		//console.log('KEY!! ' + key);
		if (key == 27) {
			_closeDatePicker();
		}
		return false;
	};
	var _checkMouse = function(e)
	{
		if (!_drawingMonth) {
			var target = jQuery.browser.msie ? window.event.srcElement : e.target;
			//console.log(jQuery(target));
			var cp = jQuery(target).findClosestParent('div.popup-calendar-wrapper');
			if (cp.get(0).className != 'date-picker-holder') {
				_closeDatePicker();
			}
		}
	};

	return {
		getChooseDateStr: function()
		{
			return navLinks.b;
		},
		show: function()
		{
			if (_openCal) {
				_closeDatePicker();
			}
			this.blur();
			var input = jQuery('input', jQuery(this).findClosestParent('input')[0])[0];

			_firstDate = input._startDate;
			_lastDate = input._endDate;
			_firstDayOfWeek = input._firstDayOfWeek;
			_openCal = jQuery(this).parent().find('>div.popup-calendar-wrapper');

			var d = jQuery(input).val();
			if (d != '') {
				if (_dateToStr(_strToDate(d)) == d) {
					_selectedDate = d;
					_draw(_getCalendarDiv(_strToDate(d)));
				} else {
					// invalid date in the input field - just default to this month
					_selectedDate = false;
					_draw(_getCalendarDiv());
				}
			} else {
				_selectedDate = false;
				_draw(_getCalendarDiv());
			}
			/*
			if (jQuery.browser == "msie") {
				_openCal.bind('keypress', _handleKeys);
			} else {
				jQuery(window).bind('keypress', _handleKeys);
			}
			*/
			jQuery(document).bind('mousedown', _checkMouse);
		},
		changeMonth: function(d, e)
		{
			_drawingMonth = true;
			_draw(_getCalendarDiv(d));
			_drawingMonth = false;
		},
		selectDate: function(d, ele)
		{
			selectedDate = d;
			var $theInput = jQuery('input', jQuery(ele).findClosestParent('input')[0]);
			$theInput.val(d);
			$theInput.trigger('change');
			_closeDatePicker(ele);
		},
		closeCalendar: function()
		{
			_closeDatePicker(this);
		},
		setInited: function(i)
		{
			i._inited = true;
		},
		isInited: function(i)
		{
			return i._inited != undefined;
		},
		setDateFormat: function(format,separator)
		{
			// set's the format that selected dates are returned in.
			// options are 'dmy' (european), 'mdy' (americian) and 'ymd' (unicode)
			dateFormat = format.toLowerCase();
			dateSeparator = separator?separator:"/";
		},
		/**
		* Function: setLanguageStrings
		*
		* Allows you to localise the calendar by passing in relevant text for the english strings in the plugin.
		*
		* Arguments:
		* days		-	Array, e.g. ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
		* months	-	Array, e.g. ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		* navLinks	-	Object, e.g. {p:'Prev', n:'Next', c:'Close', b:'Choose date'}
		**/
		setLanguageStrings: function(aDays, aMonths, aNavLinks)
		{
			days = aDays;
			months = aMonths;
			navLinks = aNavLinks;
		},
		/**
		* Function: setDateWindow
		*
		* Used internally to set the start and end dates for a given date select
		*
		* Arguments:
		* i			-	The id of the INPUT element this date window is for
		* w			-	The date window - an object containing startDate and endDate properties
		*				each in the current format as set in a call to setDateFormat (or in the
		*				default format dmy if setDateFormat hasn't been called).
		*				e.g. {startDate:'01/03/2006', endDate:'11/04/2006}
		**/
		setDateWindow: function(i, w)
		{
			if (w == undefined) w = {};
			if (w.startDate == undefined) {
				i._startDate = new Date();
			} else {
				i._startDate = _strToDate(w.startDate);
			}
			if (w.endDate == undefined) {
				i._endDate = new Date();
				i._endDate.setFullYear(i._endDate.getFullYear()+5);
			} else {
				i._endDate = _strToDate(w.endDate);
			};
			i._firstDayOfWeek = w.firstDayOfWeek == undefined ? 0 : w.firstDayOfWeek;
		}
	};
}();
jQuery.fn.findClosestParent = function(s)
{
	var ele = this;
	while (true) {
		if (jQuery(s, ele[0]).length > 0) {
			return (ele);
		}
		ele = ele.parent();
		if(ele[0].length == 0) {
			return false;
		}
	}
};
jQuery.fn.datePicker = function(a)
{
	this.each(function() {
		if(this.nodeName.toLowerCase() != 'input') return;
		jQuery.datePicker.setDateWindow(this, a);
		if (!jQuery.datePicker.isInited(this)) {
			var chooseDate = jQuery.datePicker.getChooseDateStr();
			var calBut;
			if(a && a.inputClick){
				calBut = jQuery(this).attr('title', chooseDate).addClass('date-picker');
			}
			else {
				calBut = jQuery("<a></a>").attr({'href':'javascript:;',
'class':'date-picker', 'title':chooseDate})
				.append("<span>" + chooseDate + "</span>");
			}
			jQuery(this).wrap(
				'<div class="date-picker-holder"></div>'
			).after(
				jQuery('<div></div>').attr('class', 'popup-calendar-wrapper').append(
					jQuery("<div></div>").attr({'class':'popup-calendar'})
				),
				calBut
			);
			calBut.bind('click', jQuery.datePicker.show);
			jQuery.datePicker.setInited(this);
		}
	});
	return this;
};
/*
<!-- Generated calendar HTML looks like this - style with CSS -->
<div class="popup-calendar">
	<div class="link-close"><a href="#">Close</a></div>
	<h3>July 2006</h3>
	<table cellspacing="2">
		<thead>
			<tr>
				<th scope="col" abbr="Monday" title="Monday" class="weekday">M</th>
				<th scope="col" abbr="Tuesday" title="Tuesday" class="weekday">T</th>
				<th scope="col" abbr="Wednesday" title="Wednesday" class="weekday">W</th>
				<th scope="col" abbr="Thursday" title="Thursday" class="weekday">T</th>
				<th scope="col" abbr="Friday" title="Friday" class="weekday">F</th>
				<th scope="col" abbr="Saturday" title="Saturday" class="weekday">S</th>
				<th scope="col" abbr="Sunday" title="Sunday" class="weekday">S</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="weekday">&nbsp;</td>
				<td class="weekday">&nbsp;</td>
				<td class="weekday">&nbsp;</td>
				<td class="inactive weekday">1</td>
				<td class="inactive weekday">2</td>
				<td class="inactive weekend">3</td>
				<td class="inactive weekend">4</td>
			</tr>
			<tr>
				<td class="inactive weekday">5</td>
				<td class="inactive weekday">6</td>
				<td class="inactive weekday">7</td>
				<td class="today weekday"><a href="#">8</a></td>
				<td class="weekday"><a href="#">9</a></td>
				<td class="weekend"><a href="#">10</a></td>
				<td class="weekend"><a href="#">11</a></td>
			</tr>
			<tr>
				<td class="weekday"><a href="#">12</a></td>
				<td class="weekday"><a href="#">13</a></td>
				<td class="weekday"><a href="#">14</a></td>
				<td class="weekday"><a href="#">15</a></td>
				<td class="weekday"><a href="#">16</a></td>
				<td class="weekend"><a href="#">17</a></td>
				<td class="weekend"><a href="#" class="selected">18</a></td>
			</tr>
			<tr>
				<td class="weekday"><a href="#">19</a></td>
				<td class="weekday"><a href="#">20</a></td>
				<td class="weekday"><a href="#">21</a></td>
				<td class="weekday"><a href="#">22</a></td>
				<td class="weekday"><a href="#">23</a></td>
				<td class="weekend"><a href="#">24</a></td>
				<td class="weekend"><a href="#">25</a></td>
			</tr>
			<tr>
				<td class="weekday"><a href="#">26</a></td>
				<td class="weekday"><a href="#">27</a></td>
				<td class="weekday"><a href="#">28</a></td>
				<td class="weekday"><a href="#">29</a></td>
				<td class="weekday"><a href="#">30</a></td>
				<td class="weekend">&nbsp;</td>
				<td class="weekend">&nbsp;</td>
			</tr>
		</tbody>
	</table>
	<div class="link-prev"><a href="#">Prev</a></div>
	<div class="link-next"><a href="#">Next</a></div>
</div>
*/
