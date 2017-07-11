<?php
$z = simplexml_load_file('H:/Software/MediaInfo/Example.xml');

echo "<table><tr><td class=\"tdH1\">Track Name</td><td class=\"tdH1\">Künstler</td><td class=\"tdH1\">Album</td><td class=\"tdH1\">Erscheinungsdatum</td><td class=\"tdH1\">Genre</td><td class=\"tdH1\">Verleger</td><td class=\"tdH1\">Dauer</td><td class=\"tdH1\">Dateigröße</td><td class=\"tdH1\">Format</td><td class=\"tdH1\">Bitrate</td><td class=\"tdH1\">Kanäle</td></tr>";
foreach($z->children() as $child) {
        echo "<tr><td>",$child->track->TrackName,"</td>",
            "<td>",$child->track->Knstler,"</td>",
            "<td>",$child->track->Album,"</td>",
            "<td>",$child->track->Aufnahmedatum,"</td>",
            "<td>",$child->track->Genre,"</td>",
            "<td>",$child->track->Verleger,"</td>",
            "<td>",$child->track->Dauer,"</td>",
            "<td>",$child->track->Dateigre,"</td>",
            "<td>",$child->track->Format,"</td>",
            "<td>",$child->track[1]->Bitrate,"</td>",
            "<td>",$child->track[1]->Kanle,"</td></tr>";
            }
echo "</table>";
?>
