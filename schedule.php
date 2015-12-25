
<html>
<head>
 <title>Sarah K. Berke &amp; Dustin J. Mitchell</title>
 <link rel="STYLESHEET" title="Default" href="/wedding.css" />
 <link rel="STYLESHEET" title="Default" href="/location.css" />
</head>
<body>
<div class="heading">
 <div style="position: absolute">
   <a href="/"><img border="0" src="/wedding-logo-small.png" style="padding: 0px; margin: 0px; border: 0px;" valign="center"></a>
 </div>
</div>
<div class="navbar">
 -
 {&nbsp;<a href="/schedule.php"><font color="white">schedule</font></a>&nbsp;}
 -
 {&nbsp;<a href="/hotels.php"><font color="white">hotels</font></a>&nbsp;}
 -
 {&nbsp;<a href="/scrapbooks.php"><font color="white">scrapbooks</font></a>&nbsp;}
 -
 {&nbsp;<a href="/registries.php"><font color="white">registries</font></a>&nbsp;}
 -
</div>
<div class="content">

 <form action="http://maps.google.com/maps" target="_new"
       onsubmit="setup_google_query()"
       name="directions" class="directions" id="directions">
  <input type="hidden" name="hl" value="en" />
  <input type="hidden" name="q" />

  <h1>Directions</h1>

  <table>
  <tr><td align="right">from:</td>
  <td><select name="from"> <option value="3322 E Monmouth Road, 44118">Berke Residence</option>
<option value="2600 South Park Boulevard 44120">Nature Center at Shaker Lakes</option>
<option value="3663 Park East Drive, 44122">Hilton Cleveland East / Beachwood</option>
<option value="CLE">Cleveland Hopkins Airport</option>
</select></td></tr>
  <tr><td align="right">to:</td>
  <td><select name="to"> <option value="3322 E Monmouth Road, 44118">Berke Residence</option>
<option value="2600 South Park Boulevard 44120">Nature Center at Shaker Lakes</option>
<option value="3663 Park East Drive, 44122">Hilton Cleveland East / Beachwood</option>
<option value="CLE">Cleveland Hopkins Airport</option>
</select></td></tr>
  </table>
  <input type="submit" value="Map"><br />
  <input type="button" value="Close" onClick="hide_directions()">
 </form>
<script language="javascript" type="text/javascript">
<!--
function show_directions(index) {
  document.directions.from.selectedIndex = index;
  document.getElementById('directions').style['display']='block';
}

function hide_directions() {
  document.getElementById('directions').style['display']='none';
}

function setup_google_query() {
  form = document.directions;
  from = form.from.options[form.from.selectedIndex].value;
  to = form.to.options[form.to.selectedIndex].value;
  form.q.value = 'from: ' + from + ' to: ' + to;
  hide_directions();

  return true;
}
-->
</script>

<div class="location">
 <div class="address">
  <b>Rehearsal Dinner</b><br />
  <br />
  Berke Residence<br />
  3322 E Monmouth Road<br />
  Cleveland Heights, OH 44118<br />
  (<a target="_new" href="http://maps.google.com/maps?q=3322+E+Monmouth+Road%2C+44118&spn=0.01%2C0.01&gl=us">map</a>)
(<a href="javascript:show_directions(0)">directions</a>)
<br />
 </div>
 <h1 class="title">Friday, December 2, 2005</h1>
 <div class="description">

  The rehearsal dinner will be an open house at the Berke Residence.  All
  guests are welcome.  Come any time between 6:30 and 10:00; stay as long as
  you like.  During this time, we will be making <a
  href="/scrapbooks.php">scrapbook</a> pages for Sarah and Dustin (a fun, but
  completely optional, activity).

 </div>
</div>

<div class="location">
 <div class="address">
  <b>Wedding Ceremony</b><br />
  <b>Wedding Reception</b><br />
  <br />
  <a href="http://www.shakerlakes.org/">The Nature Center at Shaker Lakes</a><br />
  2600 South Park Boulevard<br />
  Shaker Heights, OH 44120<br />
 </div>
 <h1 class="title">Saturday, December 3, 2005</h1>
 <div class="description">
  The ceremony and reception will take place at the beautiful
  <a href="http://www.shakerlakes.org">Nature Center at Shaker Lakes</a>. 
  Ample parking is available at the center, which is fully handicap accessible.
 </div>
</div>

<div class="location">
 <div class="address">
  <b>Brunch and Send-off</b><br />
  <br />
  <a href="http://www.hilton.com/en/hi/hotels/index.jhtml?ctyhocn=CLECEHH">Hilton Cleveland East / Beachwood</a><br />
  3663 Park East Drive<br />
  Beachwood, OH 44122<br />
  (216) 464-5950<br />
  (<a target="_new" href="http://maps.google.com/maps?q=3663+Park+East+Drive%2C+44122&spn=0.02%2C0.02&gl=us">map</a>)
(<a href="javascript:show_directions(2)">directions</a>)
<br />
   <br />
 </div>
 <h1 class="title">Sunday, December 4, 2005</h1>
 <div class="description">
  A Sunday morning brunch will be hosted at the Hilton Cleveland East&nbsp;/ Beachwood.  All guests are invited.
 </div>
</div>

</div>
</body>
