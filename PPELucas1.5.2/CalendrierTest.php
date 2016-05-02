<!DOCTYPE HTML>
<html>
    <head>
        
    </head>
    <body>

<table style="float: left; margin: 0 1em 1em 0"><tr><td>

  <!-- element that will contain the calendar -->
  <div id="calendar-container"></div>

  <!-- here we will display selection information -->
  <div id="calendar-info" style="text-align: center; margin-top: 0.3em"></div>

</td></tr></table>
<script type="text/javascript">//<![CDATA[
Calendar.setup({
    cont          : "calendar-container",
    weekNumbers   : true,
    selectionType : Calendar.SEL_MULTIPLE,
    selection     : Calendar.dateToInt(new Date()),
    showTime      : 12,
    onSelect      : function() {
        var count = this.selection.countDays();
        if (count == 1) {
            var date = this.selection.get()[0];
            date = Calendar.intToDate(date);
            date = Calendar.printDate(date, "%A, %B %d, %Y");
            $("calendar-info").innerHTML = date;
        } else {
            $("calendar-info").innerHTML = Calendar.formatString(
                "${count:no date|one date|two dates|# dates} selected",
                { count: count }
            );
        }
    },
    onTimeChange  : function(cal) {
        var h = cal.getHours(), m = cal.getMinutes();
        // zero-pad them
        if (h < 10) h = "0" + h;
        if (m < 10) m = "0" + m;
        $("calendar-info").innerHTML = Calendar.formatString("Time changed to ${hh}:${mm}", {
            hh: h,
            mm: m
        });
    }
});
//]]></script>


</body>
</html>