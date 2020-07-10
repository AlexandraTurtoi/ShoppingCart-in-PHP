-- --------------------------------------------------------
-- Server:                       127.0.0.1
-- Versiune server:              10.4.6-MariaDB - mariadb.org binary distribution
-- SO server:                    Win64
-- HeidiSQL Versiune:            10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Descarcă structura bazei de date pentru biblioteca
CREATE DATABASE IF NOT EXISTS `biblioteca` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `biblioteca`;

-- Descarcă structura pentru tabelă biblioteca.audiobooks
CREATE TABLE IF NOT EXISTS `audiobooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titlu` varchar(50) NOT NULL DEFAULT '0',
  `autor` varchar(50) NOT NULL DEFAULT '0',
  `durata` int(11) NOT NULL DEFAULT 0,
  `descriere` text NOT NULL DEFAULT '0',
  `categorie` text NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT 0,
  `reducere` float NOT NULL DEFAULT 0,
  `img` text NOT NULL DEFAULT '0',
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Descarcă datele pentru tabela biblioteca.audiobooks: ~13 rows (aproximativ)
/*!40000 ALTER TABLE `audiobooks` DISABLE KEYS */;
INSERT IGNORE INTO `audiobooks` (`id`, `titlu`, `autor`, `durata`, `descriere`, `categorie`, `price`, `reducere`, `img`, `quantity`) VALUES
	(1, 'Jurnalul Annei Frank ', ' Anna Frank ', 107, '<p>Anne Frank si jurnalul ei figureaza pe mai toate listele de excelenta ale veacului XX privitoare\r\n la personalitati si la carti - Cei mai importanti oameni ai secolului, Cele mai bune carti publicate in <br>\r\nsecolul XX, Operele literare definitorii pentru acelasi secol, ca sa numim doar cateva din multele topuri \r\nstabilite de specialisti, de ziaristi ori chiar de marele public.</p>', 'romana', 20, 40, 'anna.jpg', 23),
	(2, 'Secretul unui storyteller \r\n', 'CARMINE GALLO', 600, '<p>Secretul unui storyteller / The Storyteller Secret de Carmine Gallo este despre povestile pe care le spui pentru a avansa in cariera, pentru a ridica o companie, pentru a prezenta o idee si pentru a-ti duce visurile de pe taramul imaginatiei pe cel al realitatii. La finalul cartii vei obtine un tablou complet a ceea ce reprezinta in conceptia lui Carmine Gallo caracteristicile esentiale ale unui storyteller de succes.</p>', 'romana', 77, 0, 'ted.jpg', 50),
	(3, 'Poti fi fericit orice s-ar intampla', 'Richard Carlson', 380, '<p>Richard Carlson demonstreaza ca fericirea nu depinde de niciun factor exterior, aceasta fiind, de fapt, starea voastra naturala. Veti asculta, in lectura actorului Ionut Grama, o analiza atenta a proceselor psihologice care obisnuiesc sa tina oamenii captivi in starea de nefericire. Autorul ofera apoi cateva solutii sub forma unui set cinci de principii (in prima parte a cartii), dublat si validat de o serie de experiente de viata (in a doua parte a cartii). ACT si Politon va ofera audiobookul in limba romana pe suport CD MP3.</p>', 'romana', 43.7, 46, 'fericit.jpg', 34),
	(4, 'Fata de la Savoy', 'HAZEL GAYNOR', 840, '<p>Fata de la Savoy este un audiobook de fic?iune istoric? cu o ac?iune complex? ce se deruleaz? pe patru planuri diferite, din trecut ?i prezent. Povestea urm?re?te pe de o parte prezentul protagonistei Dolly, o fat? venit? din provincie la Londra unde munce?te ca menajer? într-un hotel pentru a-?i câ?tiga existen?a, dar care viseaz? m?re? s? devin? dansatoare asemenea idolului ei Loretta May.</p>', 'engleza', 79, 0, 'fata.jpg', 67),
	(5, 'The Spy and the Traitor', 'Ben MacIntyre ', 840, '<p>A thrilling Cold War story about a KGB double agent, by one of Britain\'s greatest historians.</p>\r\n<p>On a warm July evening in 1985, a middle-aged man stood on the pavement of a busy avenue in the heart of Moscow, holding a plastic carrier bag. In his grey suit and tie, he looked like any other Soviet citizen. The bag alone was mildly conspicuous, printed with the red logo of Safeway, the British supermarket.</p>', 'engleza', 27.5, 0, 'traitor.jpg', 100),
	(6, 'This Is Going to Hurt: Secret Diaries of a Junior ', 'Adam Kay', 377, '<p>Winner of a record three National Book Awards: Non-Fiction Book of the Year, New Writer of the Year and Zoe Ball Book Club Book of the Year.</p>', 'engleza', 16.5, 0, 'hurt.jpg', 56),
	(7, 'Pretending', 'Holly Bourne', 590, '<p>The new honest and hilarious novel from Holly Bourne, best-selling author of How Do You Like Me Now?</p>\r\n<p>April hates men. Her dating life is a disaster and she carries the damage of her last relationship with her every day. She\'s trying so hard to put herself out there, but every time it seems like she\'s found something real it falls apart.  </p>', 'engleza', 49.51, 0, 'pretend.jpg', 3),
	(8, 'Little White Lies', 'Philippa East', 540, '<p>Addictive, edge-of-your-seat dark women’s fiction perfect for fans of Jodi Picoult, BCC drama Thirteen and Emma Donoghue’s Room.</p>', 'engleza', 10.5, 0, 'white.jpg', 56),
	(9, 'Obisnuinte noi, obisnuinte vechi', 'JEREMY DEAN', 458, '<p>Obi?nuin?e noi, obi?nuin?e vechi este audiobookul pe care îl vei citi cu pl?cere dac? e?ti pasionat de psihologie ?i dac? vrei s? în?elegi mai bine creierul uman ?i modul în care func?ioneaz? el. Punctul de plecare al audiobookului a fost o întrebare cât se poate de simpl?, care p?rea s? aib? un r?spuns la fel de simplu: cât timp dureaz? s? î?i formezi o nou? obi?nuin???</p>', 'romana', 47, 0, 'obsin.jpg', 34),
	(10, 'The Liars', 'Naomi Joy ', 600, '<p>Two women. One deadly secret. A rivalry that could destroy them. </p><p>Ava Wells is perfect. She has the boyfriend, the career, the looks. But one night changes everything, and her life suddenly isn’t so seamless. </p><p>Jade Fernleigh is ambitious. She’s worked hard to get where she is. And she’s not about to let Ava take the job she rightly deserves. Both women share a secret that could destroy them, but who will crumble first?</p>', 'engleza', 0, 20, 'liars.jpg', 23),
	(11, 'Happy Ever After', 'C. C. MacDonald', 676, '<p>Naomi seems to have everything. A beautiful daughter, a gorgeous house, a perfect life. Behind the scenes, though, she and her husband are drifting from one another and struggling to conceive their second child. </p>\r\n\r\n<p>Then, Naomi meets a parent at her daughter\'s nursery. Sean understands her, or so she thinks. Looking for a connection, for a friend, she joins him at a swimming lesson with their children. That day, Naomi makes a terrible mistake.</p>', 'engleza', 27.48, 0, 'after.jpg', 89),
	(12, 'The Perfect Widow ', 'A.M. Castle', 661, '<p>Louise Bridges has the perfect life.</p>\r\n\r\n<p>A loving husband, Patrick. Two adorable children. A comfortable home.</p>\r\n\r\n<p>So when PC Becca Holt arrives to break the news that Patrick has been killed in an accident, she thinks Louise’s perfect world is about to collapse around her.</p>', 'engleza', 18, 0, 'perfect.jpg', 67),
	(30, 'b', 'aaaaaaaaaaa', 0, '', '', 0, 0, '', 0);
/*!40000 ALTER TABLE `audiobooks` ENABLE KEYS */;

-- Descarcă structura pentru tabelă biblioteca.autor
CREATE TABLE IF NOT EXISTS `autor` (
  `coda` int(2) NOT NULL,
  `nume` varchar(50) NOT NULL DEFAULT '',
  `prenume` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`coda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Descarcă datele pentru tabela biblioteca.autor: ~8 rows (aproximativ)
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
INSERT IGNORE INTO `autor` (`coda`, `nume`, `prenume`) VALUES
	(1, 'Rebreanu', 'Liviu'),
	(2, 'Petrescu', 'Camil'),
	(3, 'Binder', 'Irina'),
	(4, 'Blandiana', 'Ana'),
	(5, 'Blaga', 'Lucian'),
	(6, 'Hawking', 'Stephen'),
	(7, 'Japrisot', 'Sébastien '),
	(8, 'Messner', 'Reinhold'),
	(9, 'Bordeaut', 'Olivier');
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;

-- Descarcă structura pentru tabelă biblioteca.carte
CREATE TABLE IF NOT EXISTS `carte` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `coda` int(2) DEFAULT NULL,
  `titlu` varchar(50) DEFAULT '',
  `categorie` varchar(50) DEFAULT '',
  `numarPagini` int(10) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `reducere` float DEFAULT NULL,
  `descriere` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_carte_autor` (`coda`),
  CONSTRAINT `FK_carte_autor` FOREIGN KEY (`coda`) REFERENCES `autor` (`coda`)
) ENGINE=InnoDB AUTO_INCREMENT=220 DEFAULT CHARSET=latin1;

-- Descarcă datele pentru tabela biblioteca.carte: ~13 rows (aproximativ)
/*!40000 ALTER TABLE `carte` DISABLE KEYS */;
INSERT IGNORE INTO `carte` (`id`, `coda`, `titlu`, `categorie`, `numarPagini`, `price`, `reducere`, `descriere`, `img`, `quantity`) VALUES
	(201, 1, 'Ion', 'Realism', 448, 15, 26, '<p>Ion - Liviu Rebreanu Ion este primul roman obiectiv din literatura romana, fiind aparut in anul 1920, dupa o lunga perioada de elaborare, asa cum insusi autorul  mentioneaza in finalul operei, intre martie 1913 - iulie 1920. Aparitia romanului a starnit un adevarat entuziasm in epoca, mai ales ca nimic din creatia nuvelistica de pana atunci nu anunta aceasta evolutie spectaculoasa.</p>', 'ion.png', 54),
	(202, 2, 'Ultima noapte de dragoste, intaia noapte de razboi', 'Psihologic', 354, 20, 30, '<p>Experienta Primului Razboi Mondial a lasat urme adanci in arta universala, fie ea literatura, pictura sau cinematografie. Trauma, groaza si socul razboiului au fost transpuse cu acuratete in diverse lucrari, autorii acestora fiind adesea martori directi la experientele descrise. Acesta este si cazul romanului ”Ultima noapte de dragoste, intaia noapte de razboi” de Camil Petrescu, el insusi soldat in Primul Razboi Mondial.</p>', 'ul.jpg', 90),
	(203, 1, 'Rascoala', 'Interbelic', 528, 15, NULL, '<p>Pornind de la rascoalele care au zdruncinat puternic intreaga societate romaneasca, Rebreanu caracterizeaza prin figuri reprezentative mentalitatea si comportarea celor mai variate straturi sociale. […] Ca si Ion, ca si alte lucrari ale lui Rebreanu, Rascoala e un model de creatie epica solid construita, cu episoadele riguros inlantuite de o intriga bine inchegata.“ - Ovid S. Crohmalniceanu</p>', 'rs.jpg', 33),
	(204, 3, 'Insomnii', 'Romantic', 352, 31.21, 45, '<p>A venit momentul fericit in care Insomniile Irinei Binder sa ni se prinda ca o podoaba in jurul sufletelor, iar gandurile ei de la ceasuri tarzii sa ne imbratiseze pe toti cu generozitate. Citindu-i trairile, vom descoperi inca o data, cu uimire, ca nedormirile ei sunt si ale noastre, ca nesomnul meu si al tau ne apropie pe toti in acele clipe in care reusim sa ne privim viata cu sinceritate si cu inimile asternute in palme. </p>', 'is.jpg', 12),
	(205, 4, 'Fals tratat de manipulare ', 'Memorii', 484, 41.85, 45, '<ul>\r\n<li>"...O carte despre mine si timpul pe care l-am strabatut: un timp in ebulitie, bulversat de vantul batand mereu din alta directie a istoriei, spulberand sensurile, dar nu si incapatanarea mea de a le intelege.</li>\r\n<li>Nu am scris aceasta carte pentru a transmite un adevar pe care eu il detin, ci pentru a gasi un adevar de care eu am nevoie. Sensul ei nu este sa acopere, ci sa descopere ceva." (Ana BLANDIANA)</li>\r\nLong battery life, continuous wear for up to 2 days.\r\n\r\n</ul>', 'ft.jpg', 23),
	(206, 8, 'Dincolo de limita', 'Jurnal', 232, 34, NULL, '<p>„Lumea era doar cât valea noastr?. Oamenii urcau pân? la p??unile alpine, s? aduc? fân. \r\nMai departe de atât nu mergeau.“\r\nReinhold Messner a mers de la bun început mai departe decât ceilal?i. La 20 de ani se num?ra printre cei mai buni alpini?ti din Europa. E considerat astãzi ultimul mare explorator al timpurilor noastre.\r\nCe anume îi d? aripi acestui om care învinge în tot ce-?i propune s? fac?? De unde g?se?te mereu puterea de a se redescoperi? În aceast? carte, Reinhold Messner vorbe?te despre ?inuturile natale din Tirolul de Sud, despre familia sa,\r\n despre prietenie ?i egoism, despre e?ec ?i despre instinctul lui de a face întotdeauna ce e corect.</p>', 'dl.jpg', 6),
	(207, 6, 'Visul lui Einstein si alte eseuri', 'Eseistica', 176, 29.99, NULL, '<p>STEPHEN HAWKING este fizicianul de exceptie care, imobilizat intr-un carucior, suferind din tinerete de sindromul lateral amiotrofic, tine legatura cu lumea printr-un calculator care "vorbeste" in locul lui. Ceea ce nu-l impiedica sa se afle, prin studiile sale, in avangarda cercetarilor privind spatiul, timpul, originea universului si particulele elementare. Marele succes al cartilor sale de popularizare Scurta istorie a timpului si Universul intr-o coaja de nuca a schimbat perspectiva publicului asupra intrebarilor esentiale ale fizicii. Volumul de fata, superba lectie de gandire creatoare, contine deopotriva pagini autobiografice si eseuri stiintifice. Cartea se incheie cu un interviu al carui punct de pornire e muzica: ce discuri ar lua Hawking cu el pe o insula pustie?...</p>', 've.jpg', 24),
	(208, 4, 'Integrala poemelor', 'Poezie', 480, 97, NULL, '<p>„N-am fost în stare s? scriu altfel decât ie?ind din via?a mea obi?nuit?, decupând timpul poeziei din timpul vie?ii… Plecam la scris cum plecau sfin?ii în pustie, ca s?-l întâlneasc? pe Dumnezeu, iar ceea ce urma avea uneori într-adev?r tr?s?turile miracolului. Când începeam s? scriu, nu aveam senza?ia preaplinului care se revars?, ci mai curând a uimirii c? trecea prin mine. Când se oprea, m? descopeream golit?, pustie ?i, mai ales, cu sentimentul c? este de tot. " Ana Blandiana</p>', 'ip.jpg', 2),
	(209, 7, 'O logodna foarte lunga', 'Romantic', 310, 32, 0, '<p>O noapte si o zi din iarna anului 1917. Cinci soldati azvarliti in Picardia inzapezita, in transeele inamicului, se zbat sa supravietuiasca. Cel mai mic nu are nici douazeci de ani.</p>\r\n<p>In cealalta parte a Frantei, dupa ce se instaureaza pacea, Mathilde, care il iubeste, vrea sa descopere adevarul. Se lupta sa-l gaseasca, mort sau viu, in labirintul in care s-a pierdut. Cautarea ii este o logodna lunga in „les années folles” si ea va continua pana la capatul sperantei, intr-un roman care te pune pe ganduri. Fermitate si fragilitate, actiune si asteptare in destinul unei eroine greu de uitat si intr-un roman care coboara in adancimile sufletului.</p>', 'll.jpg', 45),
	(210, 5, 'Hronicul si cantecul varstelor', 'Jurnal', 279, 32, 23, '<p>„Inceputurile mele stau sub semnul unei fabuloase absen?e a cuvântului. Urmele acelei t?ceri ini?iale le caut îns? în zadar în amintire.</p>\r\n<p>N-am putut niciodat? s?-mi l?muresc, suficient de conving?tor pentru mine însumi, strania mea deta?are de logos în cei dintâi patru ani ai copil?riei. Cu atât mai pu?in acel sentiment de ru?inare ce m-a cople?it, când, constrâns de împrejur?ri ?i de st?ruin?ele ce nu m? cru?au ale Mamei, am ridicat mâna peste ochi, ca s?-mi iau în folosin?? cuvintele. Cuvintele îmi erau ?tiute toate, dar în mijlocul lor eram încercat de sfieli, ca ?i cum m-a? fi împotrivit s? iau în primire chiar p?catul originar al neamului omenesc.“</p>', 'hc.jpg', 23),
	(211, 9, 'Asteptandu-l pe Bojangles', 'Romantic', 152, 16.09, 22.99, '<p>„Olivier Bourdeaut intra in literatura cu o poveste simpla, frumoasa, nebuna si trista. Literatura lui navigheaza intre Spuma zilelor de Boris Vian si romanul despre maturizare à la Salinger.“\r\n\r\nLe Figaro</p>', 'ab.jpg', 5),
	(212, 5, 'Trilogia cosmologica', 'Stiinte', 440, 43.34, 12, '<p>"Istoria uman? ne apare deci ca o rezultant? a dou? componente care în existen?a universal? ac?ioneaz? oarecum în sens opus. Istoria uman? apare ca un «compromis», ca un compromis între aspira?ia secret? a omului de a se substitui Marelui Anonim ?i între m?surile de ap?rare luate de Marele Anonim în vederea salv?rii centralismului existen?ial.“ (Lucian BLAGA)</p>', 'tc.png', 67),
	(213, 6, 'Trilogia valorilor', 'Beletristica', 504, 17, 22, '<p>„Destinul creator al omului nu e un fapt circumscris de un vag finalism metafizic, ci are aspectul unei satura?ii finaliste, cu structuri ?i accesorii precise care îl reliefeaz? ca atare. Toate aceste considera?ii nu fac, evident, decât s? aduc? o nou? contribu?ie la defini?ia plastic? a omului ca fiin?? cu totul singular? în univers. Omul, a?a cum e, e o fiin?? unic? în lume. ?i sunt unele stele care îi lumineaz? numai lui – stele interzise fiarelor din pe?teri ?i îngerilor din cer deopotriv?.“ (Lucian BLAGA)</p>', 'tv.jpg', 32);
/*!40000 ALTER TABLE `carte` ENABLE KEYS */;

-- Descarcă structura pentru tabelă biblioteca.comanda
CREATE TABLE IF NOT EXISTS `comanda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codcli` int(11) DEFAULT NULL,
  `carte` int(11) DEFAULT NULL,
  `ebook` int(11) DEFAULT NULL,
  `audio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_comanda_masterlogin` (`codcli`),
  KEY `FK_comanda_carte` (`carte`),
  KEY `FK_comanda_ebooks` (`ebook`),
  KEY `FK_comanda_audiobooks` (`audio`),
  CONSTRAINT `FK_comanda_audiobooks` FOREIGN KEY (`audio`) REFERENCES `audiobooks` (`id`),
  CONSTRAINT `FK_comanda_carte` FOREIGN KEY (`carte`) REFERENCES `carte` (`id`),
  CONSTRAINT `FK_comanda_ebooks` FOREIGN KEY (`ebook`) REFERENCES `ebooks` (`id`),
  CONSTRAINT `FK_comanda_masterlogin` FOREIGN KEY (`codcli`) REFERENCES `masterlogin` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Descarcă datele pentru tabela biblioteca.comanda: ~0 rows (aproximativ)
/*!40000 ALTER TABLE `comanda` DISABLE KEYS */;
/*!40000 ALTER TABLE `comanda` ENABLE KEYS */;

-- Descarcă structura pentru tabelă biblioteca.ebooks
CREATE TABLE IF NOT EXISTS `ebooks` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `titlu` text NOT NULL DEFAULT '0',
  `autor` varchar(50) NOT NULL DEFAULT '0',
  `dimensiune` varchar(50) NOT NULL DEFAULT '0',
  `limba` text NOT NULL DEFAULT '0',
  `descriere` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `reducere` float DEFAULT NULL,
  `img` text DEFAULT NULL,
  `categorie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Descarcă datele pentru tabela biblioteca.ebooks: ~12 rows (aproximativ)
/*!40000 ALTER TABLE `ebooks` DISABLE KEYS */;
INSERT IGNORE INTO `ebooks` (`id`, `titlu`, `autor`, `dimensiune`, `limba`, `descriere`, `price`, `reducere`, `img`, `categorie`) VALUES
	(1, 'Little Friends', 'Jane Shemilt ', '937 KB', 'engleza', '<p>Little Friends is beautifully written and suffused with dread. Jane Shemilt\'s compelling literary thriller explores with acuity the pressure cooker challenges of adult responsibility, and the assumptions we make. The domestic settings are seductively vivid and the final outcome is profoundly shocking and terrifying - Gilly Macmillan, author of The Nanny</p>', 7.99, NULL, 'little.jpg', 'Politist'),
	(2, 'What You Did ', 'Claire McGowan', '3041 KB', 'engleza', '<p>\r\n\r\nWhat You Did opens with a scene on a precipice. A group of six friends, long separated, finally reunited for a perfect dinner at host Ali’s beautiful home. But it’s the calm before the storm – because this perfect, blissful moment is about to be consumed by horror.\r\n\r\nAli’s best friend stumbles in, bleeding and traumatized. She claims to have been assaulted by Ali’s husband, Mike, who vehemently denies it. Nevertheless, he confesses a secret that he has kept hidden for decades.\r\n\r\nShe does not know whom to believe. The answer, no matter what she chooses, will only bring more ruin. Claire McGowan writes with such sophisticated, breathless suspense and pace that I felt myself swept up in the emotional charge of the novel immediately.\r\n\r\n - Jack Butler, Editor</p>', 16, NULL, 'did.jpg', 'Mister'),
	(3, 'What We Forgot to Bury', ' Marin Montgomery', '2037 KB', 'engleza', '<p>Charlotte Coburn has a tragically dark past. But she’s safe now. She lives in a gated community, protected from danger. When teenager Elle knocks at her door looking for shelter during a particularly severe storm, the woman can’t help but think how lucky Elle’s been to have found someone as friendly as her. Except Elle chose her door on purpose…</p>', 21.99, NULL, 'bury.jpg', 'Drama'),
	(4, 'Abduction', ' Gillian Jackson ', '1367 KB', 'engleza', '<p>ABDUCTION is a page-turning kidnapping mystery which confronts every parent’s worst nightmare. This emotional psychological thriller will stay with you long after the pages have turned.</p>', 25, 30, 'abd.jpg', 'Drama'),
	(5, 'The Three Women', 'Valerie Keogh', '1423 KB', 'engleza', '<p>When Beth, Megan and Joanne meet at university, they become inseparable friends who’d do anything for one another — even agreeing to keep what happens one shocking night a secret.</p>', 30, NULL, 'women.jpg', 'Politist'),
	(6, 'Sapiens: Scurta istorie a omenirii', 'Yuval Noah Harari', '1520 KB', 'romana', '<p>De la inceputurile speciei noastre si rolul pe care l-a jucat in ecosistemul global pana in modernitate, Sapiens imbina istoria si stiinta pentru a pune in discutie tot ce stim despre noi insine, ne arata cum ne-am unit ca sa construim orase, regate si imperii, cum am ajuns sa credem in zei, in legi si in carti, dar si cum am devenit sclavii birocratiei, ai consumerismului si ai cautarii fericirii.</p>', 41.95, NULL, 'sapiens.jpg', 'Istorie'),
	(7, 'Anna Karenina ', 'Lev Tolstoi', '1674 KB', 'romana', '<p>In romanul Anna Karenina (1873-1877) axat pe tragedia unei femei aflate sub imperiul distructiv al unei pasiuni adulterine Tolstoi divulga ipocrizia inaltei societati zugraveste descompunerea modului de viata patriarhal distrugerea institutiei familiei.</p>', 12.53, NULL, 'karen.jpg', 'Istoric'),
	(8, 'In vremea contaminarii', ' Paolo Giordano', '1475 KB', 'romana', '<p>Locuind in Italia, una dintre tarile cele mai afectate de Covid-19, Paolo Giordano ne arata cum se raspandeste aceasta boala in lumea noastra interconectata, ce impact are asupra noastra si ce trebuie sa facem. El pune in discutie si alte forme de contaminare ? de la criza ecologica pana la stirile false si xenofobie  pentru a ne ajuta sa intelegem nu doar cum am ajuns aici, ci si cum, impreuna, putem face o schimbare.</p>', 17.95, NULL, 'cont.jpg', 'Mister'),
	(9, 'Cartea intamplarilor. Mistere, ciudatenii, uimiri ', 'Tatiana Niculescu', '1240 KB', 'romana', '<p>Mistere, ciudatenii, uimiri? Intamplari adevarate din vietile noastre, pentru care nu gasim nici o explicatie rationala? Iata-ne pe toti cei adunati in acest volum al uimirilor povestindu-ne unii altora si cititorului situatii neobisnuite, coincidente, vise, ciudatenii, aparitii inexplicabile, de care primii surprinsi suntem noi insine.</p>', 24.2, NULL, 'min.jpg', 'Mister'),
	(10, 'Medicina, nutritie si buna dispozitie', 'Simona Tivadar', '998 KB', 'romana', '<p>Te va invata sa fii mai circumspect cu miracolele si afirmatiile iresponsabile ale celor care vor doar sa vanda un produs, fara sa fie insa responsabili pentru efecte. Te crucesti cand vezi reclame nerusinate la bauturi magice care trateaza cancerul cu bicarbonat? Te uluiesc persoanele care se lasa escrocate cu naivitate de aparate miraculoase pentru diagnosticarea „tuturor bolilor“? </p>', 21.19, NULL, 'med.jpg', 'Politist'),
	(11, 'Colectionarul', 'John Fowles', '1895 KB', 'romana', '<p>Colectionarul primul roman al lui John Fowles este o carte cu o conceptie absolut originala despre pasiunea unui functionar neinsemnat. Un tanar timid asocial el este usor-usor cuprins de nevinovata bucurie de a colectiona obiecte. Odata cu primirea unei mosteniri consistente mica lui placere ia proportii si ajunge treptat sa-i domine viata. </p>', 13.89, NULL, 'col.jpg', 'Drama'),
	(12, 'One Lost Soul', ' J M Dalgliesh', '2074 KB', 'engleza', '<p>One Lost Soul is the explosive debut in a new series of thrillers from Amazon number one bestselling crime writer, JM Dalgliesh, the author of the Dark Yorkshire books. Perfect for fans of LJ Ross, JD Kirk, Angela Marsons, Joy Ellis and Damien Boyd.</p>', 25.65, NULL, 'soul.jpg', 'Mister');
/*!40000 ALTER TABLE `ebooks` ENABLE KEYS */;

-- Descarcă structura pentru tabelă biblioteca.masterlogin
CREATE TABLE IF NOT EXISTS `masterlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `email` text NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `datan` date DEFAULT NULL,
  `nume` text DEFAULT NULL,
  `tara` text DEFAULT NULL,
  `telefon` text DEFAULT NULL,
  `gen` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Descarcă datele pentru tabela biblioteca.masterlogin: ~7 rows (aproximativ)
/*!40000 ALTER TABLE `masterlogin` DISABLE KEYS */;
INSERT IGNORE INTO `masterlogin` (`id`, `username`, `email`, `password`, `role`, `datan`, `nume`, `tara`, `telefon`, `gen`) VALUES
	(12, 'test', 'test@gmail.com', 'test', 'admin', NULL, 'test', NULL, NULL, NULL),
	(14, 'daniel', 'daniel@gmail.com', '12345', 'user', NULL, NULL, NULL, NULL, NULL),
	(15, 'user', 'user', 'user', 'user', '1999-01-04', 'Alexandra Turtoi', 'Romania', '5654', 'feminin'),
	(33, 'AlexandraT', 't.alexandra99@yahoo.com', '12345', 'user', '2020-05-21', 'Ale T', 'Romania', '12364', NULL),
	(34, 'test', 'asada', 'adadsadsa', 'user', NULL, NULL, NULL, NULL, NULL),
	(35, 'at252', 't.alexandra99@yahoo.com', '123', 'user', NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `masterlogin` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
