<?php
  $title = "ACM @ PSU - Tutor's Schedule";

// put stuff in here to get added to this specific page's head section
function head_content()
{
?>
  <style type="text/css">
td	{width: 2.0in;}
  </style>

  <script type="text/javascript">
  </script>
<?php
}

// put stuff in here to get it displayed on the page
function main_content()
{
?>
    <h2>ACM Tutors (Fall 2012)</h2>
    <table>
      <tr>
        <th></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
      </tr><tr>
        <td>11-12</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr><tr>
        <td>12-1</td>
        <td></td>
        <td></td>
        <td>bajr<br />CS 200 and under</td>
        <td></td>
        <td></td>
      </tr><tr>
        <td>1-2</td>
        <td></td>
        <td>Philip<br />CS 161-163, 202, 250, 251</td>
        <td>bajr<br />CS 200 and under</td>
        <td></td>
        <td></td>
      </tr><tr>
        <td>2-3</td>
        <td>Sage<br />CS 161-202</td>
        <td>Philip<br />CS 161-163, 202, 250, 251</td>
        <td>Hoff<br />CS 161-163</td>
        <td></td>
        <td>Jameson<br />All lower division CS classes</td>
      </tr><tr>
        <td>3-4</td>
        <td>Sage<br />CS 161-202</td>
        <td></td>
        <td>Hoff<br />CS 161-163</td>
        <td></td>
        <td>Wookiee<br />CS 161-163, 201, 202</td>
      </tr><tr>
        <td>4-5</td>
        <td></td>
        <td></td>
        <td>Steiert<br />All lower division CS classes</td>
        <td></td>
        <td></td>
      </tr><tr>
        <td>5-6</td>
        <td></td>
        <td></td>
        <td>Steiert<br />All lower division CS classes</td>
        <td></td>
        <td></td>
      </tr>
    </table>
<?php
}

  include 'scripts/body.php';
?>