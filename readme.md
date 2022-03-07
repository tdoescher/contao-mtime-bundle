# Insert-Tag zum anhängen des Zeitstempel der letzten Dateiänderung an einen Dateipfad

Dieser Insert-Tag nutzt die PHP filemtime()-Funktion zum anhängen des Zeitstempel der letzten Dateiänderung an einen Dateipfad um das ausspielen alter Dateien aus dem Cache zu verhindern. 

Der **{{mtime::files/theme/main.css}}** Insert-Tag wird zu:

`files/theme/main.css?1641038400`