<?php
    include_once __DIR__ . '\index.php';

    $simplexmlFile = simplexml_load_file('H:/Software/MediaInfo/Example.xml');

    echo "<table><tr><td class=\"tdH1\">Track Name</td><td class=\"tdH1\">Künstler</td><td class=\"tdH1\">Album</td><td class=\"tdH1\">Erscheinungsdatum</td><td class=\"tdH1\">Genre</td><td class=\"tdH1\">Verleger</td><td class=\"tdH1\">Dauer</td><td class=\"tdH1\">Dateigröße</td><td class=\"tdH1\">Format</td><td class=\"tdH1\">Bitrate</td><td class=\"tdH1\">Kanäle</td><td>Upload</td><td>Download</td></tr>";
    $sum = array();
    
    $counter = 0;
    foreach($simplexmlFile->children() as $child) {
        $sum[$counter]["Vollstndiger_Name"] = $child->track->Vollstndiger_Name;
        $sum[$counter]["Lied"] = $child->track->TrackName;
        $sum[$counter]["Künstler"] = $child->track->Knstler;
        $sum[$counter]["Album"] = $child->track->Album;
        $sum[$counter]["Datum"] = $child->track->Aufnahmedatum;
        $sum[$counter]["Genre"]= $child->track->Genre;
        $sum[$counter]["Verleger"] = $child->track->Verleger;
        $sum[$counter]["Dauer"] = $child->track->Dauer;
        $sum[$counter]["Größe"] = $child->track->Dateigre;
        $sum[$counter]["Format"] = $child->track->Format;
        $sum[$counter]["Bitrate"] = $child->track[1]->Bitrate;
        $sum[$counter]["Kanäle"] = $child->track[1]->Kanle;
        $counter++;
    }
    
foreach($sum as $key => $row )
        {
            $vollstndigerName[$key] = $row["Vollstndiger_Name"];
            $lied[$key] = $row["Lied"];
            $kuenstler[$key] = $row["Künstler"];
            $album[$key] = $row["Album"];
            $datum[$key] = $row["Datum"];
            $genre[$key] = $row["Genre"];
            $verleger[$key] = $row["Verleger"];
            $dauer[$key] = $row["Dauer"];
            $groesse[$key] = $row["Größe"];
            $format[$key] = $row["Format"];
            $bitrate[$key] = $row["Bitrate"];
            $kanaele[$key] = $row["Kanäle"];
        }
sort($lied, SORT_DESC);

foreach($sum as $key => $row )
{
    echo "<tr><td>",$sum[$key]["Lied"],"</td>";
    echo "<td>",$sum[$key]["Künstler"],"</td>";
    echo "<td>",$sum[$key]["Album"],"</td>";
    echo "<td>",$sum[$key]["Datum"],"</td>";
    echo "<td>",$sum[$key]["Genre"],"</td>";
    echo "<td>",$sum[$key]["Verleger"],"</td>";
    echo "<td>",$sum[$key]["Dauer"],"</td>";
    echo "<td>",$sum[$key]["Größe"],"</td>";
    echo "<td>",$sum[$key]["Format"],"</td>";
    echo "<td>",$sum[$key]["Bitrate"],"</td>";
    echo "<td>",$sum[$key]["Format"],"</td>";
    echo "<td><form method=\"POST\"><input type=\"submit\" name=\"reset",$sum[$key]["Künstler"],"\" value=\"Click me\" /></form></td>";//<button onclick=\"",uploadFile(),"\">Click me</button></td>";
    echo "<td><input type=\"button\" name =\"Button1\" onclick=\"uploadFIle(\$sum[\$key][\"Vollstndiger_Name\"]);\"></td></tr>";
      
}
    echo "</table>";

?>
