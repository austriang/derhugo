Navbar Visited state, wenn du auf ein Navigations Link clickst, hatte es eine andere Farbe, als wie bevor, hab das mit ".nav__button:visited" gechanged. CSS Line 102

Vor einem Color Code muss immer eine # sein ansonsten funktioniert er nicht. Bsp.: CSS Line 85 Code war "color: ABBCFF" Der code bringt dir nichts.

Versuch Klassen und ID's mit nur einem _ machen, du hast ueberall zwei Unterstriche.

Die Intro Animation auf der Startseite war zu lange, wenn du solche animationen machst musst du immer vom Auge des Besuchers schauen, viele wollen nicht zwei sekunden warten bis die Animation fertig ist, mach am besten maximal 0.5s bei solchen animation. bei der hover animation fuer die nav buttons musst du auch aufpassen, wenn du "transition: all 0.5s" machst ist das erstens zu lange und zweitens sobald die webseite rein loaded braucht es zuerst mal 0.5s bis man die buttons anclicken kann.
Auch animation zu lange max 0.3s. Hab es wie du auf CSS Line 93 sehen kannst auf "transition: background-color 0.3s ease-in-out" gechanged.

Blog sind die aenderung nimm ich an offensichtlich.
Ich hab deinen code raus ge-commented und hab einen neuen blog abschnitt gemacht. Mit dieser Grid variante kannst du ganz einfach wenn du woche 5, woche 6, ... adden willst musst du nur ein neues div adden sowie unten gezeigt.

<div class="week" id="week5">
	<div class="week-img">
        	<img src="https://via.placeholder.com/450x300" alt="This is a Placeholder Image">
        </div>
        <div class="week-text">
                <h1 class="blog-header">This is a Header for Week 4</h1>
                <p>This is a placeholder text for Week 4</p>
        </div>
</div>

Und in CSS musst du nur bei der Klasse ".week" (CSS Line ca. 530) woche 5 zur grid template area adden. So sind die meisten neuen Blogs aufgebaut. 

#week5 .week-img{
    text-align: right;
    padding-right: 50px; 
    grid-area: week5img;
}
#week5 .week-text{
    text-align: left; 
    grid-area: week5txt;
}

Wenn das Bild links sein soll kannst du woche 1 kopieren, wenn das Bild rechts sein soll Woche 2.


Eine grosser Fehler denn du nicht machen darfst ist dein Bilder folder wirklich "Bilder" nennen, der muss "img" heissen. Das hab ich fuer dich gechanged. Uebermich.html hab ich jetzt nicht gechanged, es kann gut sein das es keine probleme gibt auf anderen Browser, aber du musst halt immer aufpassen.

Deine CSS File hat auch irgendwas mit stylev1_.css oder gehiessen, am besten ganz simple style.css nennen. du brauchst nie was anderes.

Bei Ueber Mich und ESK hast du ueberall die Fragen und Antworten zusammen geschrieben. Hab nach den Fragen ein <br> geadded und die Frage groesser gemacht, damit es uebersichtlicher ist und mehr professionalitaet added. Und bei den Texten hab ich noch ein extra <div> geadded sodass man die groesse des textes anpassen kann. 
Bsp.: uebermich.html > Code Line 43 > id="me-txt"

Emails muessen nicht info(at)derhugo(dot)com geschrieben werden. Du kannst ganz einfach deine Email schreiben, das macht kein unterschied.

Dann Klassen und IDs nochmal, Klassen sind dafuer da, wenn du einen style auf mehreren verschieden teilen der Webseite brauchst, aber wenn du weist das du diesen einen Style nur genau auf einem Teil der Webseite brauchst, dann benutz immer ID. Immer.

Bilder
wenn du Bilder hast, hast du technisch gesehen immer eine Fixbreite und Fixhoehe und eine Fixe Aspect Ratio, bsp.: 16:9
Und wenn du diesen Code hier addest behaelst du diese Aspect Ratio: "max-width: 300px;"
								     "height: auto;"
So passt sich das Bild immer automatisch an, es kann jetzt in diesem Beispiel nicht breiter werden als 300px, also wenn die Moeglichkeit waere wuerde es gleich gross bleiben.

Display: Grid
Grid ist eigentlich ganz einfach, du kannst bestimmen wo welches item hingehoert, das kannst entweder auf der ganzen Webseite benutzen oder nur auf gewissen teilen der Webseite.
Aber benutz nicht 1FR, wenn du die breite einer Column bestimmen willst nimm %, zum Beispiel: du hast eine Webseite mit drei Teilen die du in einer Reihe haben willst, dann musst du einfach diesen Code adden: "grid-template-columns: 33,3% 33,3% 33,3%; oder 50% 50% bei zwei oder 100% bei einem."

So hast du mehr kontrolle darueber.
Wie gestern schon gesagt schau dir diese Webseite zu grid an: https://css-tricks.com/snippets/css/complete-guide-grid/
Hier kannst du viele andere Sachen auch nachschauen.
Und fuer andere Simple sachen schau hier nach die haben sehr sehr viel: https://www.w3schools.com/
Wenn du noch andere changes willst musst du nur sagen.



