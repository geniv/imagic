Přepsaná knihovna ImageMagick pro php, z: http://www.imagemagick.org/script/index.php,
bude tu verze pro Gambas2 & 3 a samozdrejme i pro PHP (>= 5.3.X).

Co se týče aktuálního stavu knihovny:

**PHP verze:** je prakticky hotova, ne tam sice ještě několik nedokončených funkci a pár otazníku ale jak se vyskytne čas vhrnu se na to.

**Gambas verze:** tady ta vychází z php verze, jenže další překlopení do Gambas verze bude chvíli trvat, časové důvody.

Tato třída (knihovna) je reimplantací php knihovny Imagick z balíku PECL, jenže tento není na všech www hostincích povolený (z dobrého důvodu, jedná se hlavně o paměťovou náročnost). Takovýchto klonů se dozajista několik najde, ale já si řek že ji forknu.

S tím že zachovám metody více méně stejné jako jsou v php manualu, abych vlastně zachoval jakousi kompatibilitu mezi původním Imagickem a mojí Imagicem.

Dá se říct že tato knihovna je vytvořena rádoby Reverzním Inženýrstvím.

**Již nově s Fluent Interface!**

  * 7.5.2011 - se knihovna dočkala nového commitu, přibyl testovací soubor, nové konstanty, nové funkce, ověřování verzí, zápis pomocí fluent interface, inovace skládáni příkazu při systémovém voláni, systematická úspornost voláni systémových příkazů.

  * 10.5.2011 - dokončení hlavních efektových funkcí, vyladění několika Bugu, doplnění o obrázky, několik uprav v ImagicDraw, no a hlavní je to že se dá knihovna už více méně plnohodnotně používat, teď se musí odchytávat tak užívání v praxi.

  * 31.5.2011 - oprava přístupnosti atributu a metod na private a oprava bugu který umožňoval zpracovávat binární soubory, již dovoluje jen obrázky.

  * 15.6.2011 - další commit a zde přibylo, namespace + use (z PHP5), podpora pro verze tedy PHP >= 5.3.X

  * 10.7.2011 - úprava číslovaní opraveni bugu s uvozovky a předěláno \n na PHP\_EOL, a ještě tam proběhla malá změna kolem licence

  * 15.8.2011 - oprava několika bugu, přidaní několika funkci, změny v kostce zapsány v changelogu, přidána podpora GIFu

  * 25.8.2011 - oprava nekolika funkci, zmeny v changelogu

Takže když, už ji budete tuto knihovnu používat, tak neváhejte napsat pokud něco naleznete, jsem přece jen člověk, a nikdo není dokonalý ani neomylný.


Navíc jsem o této knihovně informoval i administrátory webhostingu Klenot.cz, takže když tato knihovna bude řádně otestována tak možná přibude i do nápovědy tohoto serveru.


---


**svn link na komponentu gambas2:**

`https://imagic.googlecode.com/svn/gambas2/gb.imagick/`

pro gambas3 bude dodatecne importovana az vyladena verze z 2


---


**svn link na tridu php5:**
(jeste neni uplne hotova, jeste tam stale nekolik desitek funkci chyby)

`https://imagic.googlecode.com/svn/php5/imagic/`

**checkou:**

`svn checkout https://imagic.googlecode.com/svn/php5/imagic/ imagic`

**commit:**

`svn commit`

za předpokladu že máte nastavený jako svn editor nějaký grafický editor např gedit, tak se vám otevře a vy zde napíšete slušně seznam změn které jste provedly. Případně se vám může commit zeptat ještě na login a heslo... jako autorizace pro ty co mají právo commit-ovat.


Pokud máte nápady, připomínky, pište na mail ;)