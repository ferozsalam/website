<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../style.css"/>
<title>Average FSA Food Ratings</title>
</head>
<body>
  <div class="body-wrapper">
    <?php require('../header.php');?>
    <div class="content">
      <h2>Average FSA food ratings for the UK (March 2013)</h2>
      Just before the Bank Holiday weekend I discovered that the Food Standards Agency has 
      put up virtually all available data on hygiene ratings up on its website, in neatly formatted
      XML. Naturally, the most useful thing to do with this information is to play councils off against
      each other in a heat map: <br/><br/>
      <iframe style="margin:auto; display:block" width="800" height="600" src="http://www.openheatmap.com/embed.html?map=UnicycleRegesMismotion" ></iframe>
      <p>Notably missing is data for Scotland, whose ratings are in a Pass/Fail format and therefore not as
      easily comparable, as well as data for Northern Ireland, which was available but constantly 
      refused by OpenHeatMap.</p>
      <h3>The Food Standards Premier League</h3>
      Of the 360 councils for which I was able to scrape data, here are the Champions League contenders...:
      <br/><br/>
      <table>
        <tr><th>Council</th><th>Average Rating</th></tr>
        <tr><td>North Devon</td><td>4.778</td></tr>
        <tr><td>Eden</td><td>4.758</td></tr>
        <tr><td>South Gloucestershire</td><td>4.751</td></tr>
        <tr><td>Tunbridge Wells</td><td>4.732</td></tr>
        <tr><td>Mid Devon</td><td>4.667</td></tr>
      </table>
      <br/>
      ...and here are the relegation stragglers (it's worth noting that only one of the bottom five isn't a London borough):
      <br/><br/>
      <table>
        <tr><th>Council</th><th>Average Rating</th></tr>
        <tr><td>Walsall</td><td>3.338</td></tr>
        <tr><td>Ealing</td><td>3.277</td></tr>
        <tr><td>Hackney</td><td>3.129</td></tr>
        <tr><td>Bexley</td><td>3.092</td></tr>
        <tr><td>Sutton</td><td>3.074</td></tr>
      </table>
      <h3>Food hygiene standards and income?</h3>
      <p>When I first started pulling the data, I wondered if there would be a strong correlation
      between income and food hygiene, as I expected areas of lower average income to have less
      access to food of higher standards. The data doesn't seem to show any obvious correlation, 
      although I'm yet to run any quantitative analysis on it. </p>
      <p>What has been surprisingly obvious, though, is the anaemic blue of lower hygiene
      standards that arises as you move towards London. I'm not entirely sure what the causes are (a
      large number of undiscerning tourists and a much higher cost of living spring to mind), but
      if it's good food you're after, you can on average get it cleaner (and probably cheaper) anywhere
      outside of London.</p>
      <p>For comparison, you can find an income heat map by the Guardian 
      <a href="http://www.guardian.co.uk/news/datablog/2011/nov/24/wages-britain-ashe-mapped">here</a>, and a 
      housing cost map that shows slightly more correlation in the London area (but unfortunately not elsewhere)
      <a href="http://www.guardian.co.uk/news/datablog/interactive/2012/mar/19/housing-minimum-wage-map">here</a>.</p>
      <h3>Data</h3>
      The original data is available, as I mentioned earlier, off 
      <a href="http://ratings.food.gov.uk/open-data/en-GB">the FSA website</a>. My sorted mean values 
      are available <a href="sorted.txt">here</a>.
    </div>
  </div>
</body>
</html>

