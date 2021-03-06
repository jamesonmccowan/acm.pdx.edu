<?php

/* for information about the PHP date object: http://www.php.net/manual/en/datetime.createfromformat.php */
//$date = DateTime::createFromFormat('m-d-Y', '4-25-2013');
//$cdate = date('Y-m-d H:i:s');
$cdate = new DateTime("now");

class Event
{
  public $title = '';
  public $date = NULL;
  public $description = '';
  public $speaker = '';

  function __construct()
  {
    if(func_num_args() == 4)
    {
      $this->title = func_get_arg(0);
      $this->date = DateTime::createFromFormat('m-d-Y', func_get_arg(1));
      $this->description = func_get_arg(2);
      $this->speaker = func_get_arg(3);
    }
  }
}

/*
new Event(
"",
"",
"",
""),

*/

$events_array = array(

new Event(
"Student Success in Finding a Career",
"11-1-2013",
"Ever wondered what makes a student successful in landing that career after university life ends? Ever wanted to find that competitive edge that makes you stand out from the crowd? If you answered yes to either of the above questions, this tech talk is for you.<br />
<br />
Frank Goovaerts is the Interim Director of Student Success at Portland State University at MCECS, and will be giving a tech talk on how to get that extra edge and what services he offers to help students transition from college to career.",
"Frank Goovaerts"),


new Event(
"So You Want to be an App Developer?",
"10-25-2013",
"Adam Lorts is a sales and marketing professional at DevelopmentNow who focuses on business development in the digital space.<br />
<br />
Adam's day job involves creating sales materials, building agency partnerships, coaching resellers, handling direct inquiries and RFP's as well as other strategic duties to aid the growth and success of DevelopmentNow.<br />
<br />
Summary for talk: We've had some new younger hires so there's a lot of things we've learned on turning highly intelligent, educated CS grads into highly productive mobile developers. This focuses on doing what it takes there.
",
"Adam Lorts"),


new Event(
"Connecting Android to MySQL: An Interactive Tutorial",
"10-18-2013",
"In this talk, we will cover the basics of how to connect an Android device to a MySQL database. The technique used is adaptable to any database server (SQL Server, PostGRES, etc...)<br />
<br />
As you probably know, Android does not have a built in functionality to access remote databases, instead it uses SQLLite, a flat file system.<br />
<br />
However, using Java EE 7 and a simple PHP connectivity script, it is practically trivial to do the basic CRUD operations on a remotely hosted database.<br />
<br />
Bring a laptop with Java 7 and Android SDK with Eclipse installed, and get ready to code. Or just bring yourself, and a sheet will be passed to have the connection code EMAILED to you after the venue.<br />
<br />
About the speaker: Sean Walsh (IRC:Azadi) is the current chair of the Portland State Chapter of the ACM. Sean is currently finishing his Bachelor's of Computer Science with a Mathematics Minor at Portland State University, and has industry experience with deploying mobile apps for Android.",
"Sean Walsh (IRC:Azadi)".
'<a href="https://github.com/pdxacm/acm.pdx.edu/tree/master/tech-talks/Android%20with%20MySql/">Source Code From Speech</a>'),

new Event(
"Text Lacks Empathy",
"5-24-2013",
"Have you ever written a nice friendly email and gotten a reply that seems like they read a whole different email?<br />
<br />
In Open Source communities we write to each other all the time, but we.re not really writing, we're speaking with our fingers. Text is our primary way to communicate, but text has problems. Speaking conveys subtle emotional cues that as social animals we rely on; text strips them out. A thoughtful correspondent can put those emotions back, but we're often not thoughtful.<br />
<br />
This talk is about the special problems of textual communication: mitigating them; ensuring that what you mean to say is what is understood; interpreting messages that seem totally out of whack; and increasing empathic bandwidth.<br />
<br />
<b>About the speaker</b><br />
N&#243;ir&#237;n Plunkett is a jack of all trades, and a master of several. By day, she works for Eucalyptus Systems, as a geekEnglish translator, and general force multiplier. She's passionate about community, communication, and collaboration.<br />
<br />
Her open source work epitomizes the saying \"if you want something done, ask a busy person\": N&#243;ir&#237;n cut her teeth on the httpd documentation project at Apache, but soon started running conferences for the Apache Software Foundation . She was involved in setting up the Community Development project, is Org Admin for the Google Summer of Code (with more than 40 students!), and continues to contribute to projects as diverse as Infrastructure and Incubator.<br />
<br />
N&#243;ir&#237;n was the first woman on the board of the Apache Software Foundation, and continues to sit on the board of the Open Cloud Initiative. She's also an advisor to The Ada Initiative, supporting women in open technology and culture.<br />
<br />
When she's not online, N&#243;ir&#237;n can often be found on the dance floor or down at the pub, although she's also a keen harpist & singer, and an excellent sous chef!",
"N&#243;ir&#237;n Plunkett"),

new Event(
"The software industry, big data, and analytics. Why these might be the most marketable skills you can learn.",
"5-10-2013",
"During this talk I'll discuss current trends in the software industry, how database systems are affecting growth and high value skill sets, and where the action is likely in the coming years. We'll focus on the same technical stack that has led to innovation and major products such as Facebook, Google Search, speech recognition, and context based advertising.<br />
<br />
<b>About the speaker:</b><br />
The data architect for Netmotion Wireless, Inc., Jonathan Wiggs is an accomplished software architect with significant experience in the fields of big data, Bayesian analytics, enterprise architecture, and cloud computing. Jonathan has helped launch start-up companies including Jott Networks & RGB Labs, and has led engineering and research groups at companies such as Microsoft and Nuance. He enjoys writing, speaking, sharing his experiences with his peers, and giving back to the industry he has loved for more than twenty years. Jonathan lives in the country and spends his free time with his wife and several admirable dogs. Contact Jonathan at jon_wiggs@yahoo.com.",
"Jonathan Wiggs"),

new Event(
"AltOS - Building Amateur Rocketry Software",
"5-3-2013",
"Amateur rocketry enthusiasts build rockets somewhere between Estes and
NASA sizes. Operating as sounding rockets, flights range from 1000m to
more than 30km and are generally passively fin stabilized. Two of the
significant challenges are deploying the recovery system components
(generally parachutes) and providing tracking to locate the rocket after
flight. Altus Metrum is a project building hardware and software for
amateur rocketry, and AltOS is the suite of software running in the
rocket avionics and on the ground to track and analyze the flight.<br />
<br />
This talk will discuss the unique system challenges presented by
rocketry, including high acceleration and speeds, automatic control of
explosives and other flammable materials and the wide range of technical
skills of the participants. Included will be a presentation of the
hardware components used in the system and how that has driven the
architecture of the AltOS flight software over four years of
development.<br />
<br />
<b>About the speaker:</b><br />
Keith Packard has been developing open source software since 1986, focusing
on the X Window System since 1987, designing and implementing large parts of
the current implementation.  He is currently a Principal Engineer with Intel's
Open Source Technology Center. Keith received a Usenix Lifetime Achievement
award in 1999 and sits on the X.org foundation board.",
"Keith Packard"),

new Event(
"Project Euler Brainstorm",
"5-1-2013",
"ProjectEuler.net is a knowledge base full of programing problems. The kind of problems that cannot be
solved by hand, at least not easily. This would be an event lasting 2 hours to program up some solutions, for fun
and resume fodder, as well as increased programming experience. This is a game played around the world by
hobbyist programmers. It is a language independent game, and one where there are questions suitable for
everyone, including 1st year students.<br />
<br />
Just bring yourself, and if you are so compelled, a laptop. The CS Windows Lab has computers.<br />
<br />
<b>When:</b> 5/1/2013 - From 4:30PM to 6:30PM<br />
<b>Where:</b> CS Windows Lab (FAB 88-09)<br />
<br />",
"Sean Walsh"),

new Event(
"More with less: getting started building better systems with ClojurE",
"4-19-2013",
"Clojure is a modern functional programming language. It's ecosystem is packed to the brim with tools that help you achieve more with less typing, less moving parts, and less (or no) mutable state.<br />
<br />
Come learn about functional programming, tips to getting started and being effective with Clojure, software transactional memory, and persistent data structures. Clojure is language built to tackle the complexity of the systems we face today, and this talk will take you on tour through its features, opinions, and approach.<br />
<br />
<b>About the speaker:</b><br />
Paul degrandis lives for magnificent engineering. Elegant, well-founded, useful solutions to problems that say something about engineering's beauty. Currently he is a scientist and co-founder at NDensity - an innovation lab. Previously he worked at Tutorspree (YC), PushButton Labs, Etsy.com, OurShelf (DreamIt), and SilverCloud Software as well as working in advanced research. He's also contributed, time, money, and effort to Code for America, PyPy, and Clojure. He is often speaking on Clojure, distributed systems, and dependable systems. <a href=\"http://www.pauldee.org/blog\">http://www.pauldee.org/blog</a> <a href=\"http://ndensity.com/\">http://ndensity.com</a>",
"<a href=\"http://www.pauldee.org/blog\">Paul degrandis</a>"),

new Event(
"Indyandy Jones and The Project of Doom",
"4-12-2013",
"Over the years I've been on several different teams that have been formed around existing software projects. The original authors were no longer directly involved, if they were anywhere to be found at all. How do you navigate the pitfalls and traps in existing software projects and come out the other side with the gold? What matters, what doesn't, and how do you stay alive?<br />
<br />
<b>About the speaker:</b><br />
Andrew Parker first started with computers on a Commodore 64 and has now been a professional software developer for over a decade. He has been self taught, school taught, and mentor taught by a range of individuals and institutions around the world. He is passionate about TDD, refactoring, and pair programming. Andrew Parker is a software developer at Puppet Labs.",
"Andrew Parker"),

new Event(
"Overview of .NET C# 4.5",
"3-8-2013",
"This is a high-level overview of the capabilities and uses of C# 4.5 and the .NET framework, from a student, for students. Topics covered will include concurrency and multi-threading, lambda expressions and anonymous functions, LINQ, a basic GUI demonstration, regular expressions, and more. Comparisons to C++ will be made as well. Some mathematical models will be shown if time permits.<br />
<br />
<b>About the speaker:</b><br />
Sean Walsh (AKA Azadi) is a senior undergraduate student in the Computer Science program at Portland State University. His interests include systems programming, databases, and machine learning.",
"Sean Walsh"),

new Event(
"Write your own Bayesian Classifier: An Introduction to Machine Learning",
"3-1-2013",
"Through the implementation of an honest-to-goodness Bayesian classifier, we'll tour the major topics of supervised machine learning: tokenization, feature selection and vectorization, model training and tuning, and execution. Time permitting, we'll touch on other techniques and topics.<br />
<br />
    <b>About the speaker:</b><br />
    John Melesky's been programming on the web since gopher was a legitimate competitor. He is the team lead for the Analytics team at Janrain, where he gets to get his hands covered in all sorts of interesting data.",
"John Melesky"),

new Event('Hadoop Hears a Who',
'2-22-2013',
'Hadoop is an important batch data processing framework in use by companies of all sizes. It has a very approachable architecture and can be applied to a large group of modern computing problems. In addition, the framework supports an implementation of mapreduce which allows users to run jobs on any size cluster to fit their data size. Come learn about the architecture of this framework, management of the cluster, and how to develop mapreduce jobs.<br />
<br />
<b>About the speaker</b><br />
Dan Colish is a Core Data Engineer at Urban Airship. He is also a maintainer and active open source developer for Xapian and other smaller projects. He resides in Portland with his family and enjoys snowshoeing and hiking around Mt. Hood.',
'Dan Colish'),

new Event(
'12 Hours with Google Dart',
'2-15-2013',
'A high-level overview of the characteristics of Google\'s new web scripting language, from the perspective of a student who learned to use the language in under 12 hours. Does Dart have a chance to become a viable and heavily adopted alternative to JavaScript? The history, philosophy and intended purpose of the language will be discussed, and comparisons will be made to other languages and frameworks.<br />
<br />
<b>About the speaker:</b><br />
Devin Quirozoliver is a senior undergraduate student in the Computer Science program at Portland State University. His interests include languages, user interface and wearable computing.',
'Devin Quirozoliver'),

new Event(
'Challenges in Developing the Portal Transportation Data Archive',
'2-8-2013',
'The Portal Transportation Data Archive is a ~2TB PostgreSQL database
that has been in existence since 2004. Kristin will demonstrate the
current state of Portal. She will discuss the various technologies used
 to collect the data and the complexities of getting the data from the
sensors to the database. She will also discuss her experiences working
directly with local transportation agencies (ODOT, Metro, Trimet, Cities
of Portland and Vancouver) to produce a web site that is useful in their
day-to-day operations.<br />
<br />
About the speaker:<br />
Kristin Tufte is an assistant professor of Computer Science and Civil
Engineering at Portland State University. Kristin is a recovering
database geek.',
'Kristin Tufte'),

new Event(
'Collaborative chaos: what it means to write code, manage projects and work with people in open source communities',
'2-1-2013',
'Working in software and with computers means wildly different things depending on who you talk to. In open source, the work spans every aspect of software development - from the marketing and documentation to the troubleshooting end-user systems.<br />
<br />
The "community manager" or "organizer" role in open source communities is probably the least-well defined in our industry, but is seen as a crucial part of open source software development. <br />
<br />
Selena will talk about her work as a serial user group starter, open source conference circuit speaker, conference organizer and contributor to PostgreSQL - all roles considered part of community management. She\'ll also talk about other kinds of community management roles available at small and large companies, or as a volunteer in an open source project. <br />
<br />
SHORT BIO<br />
Selena is a major contributor to PostgreSQL, she founded and runs the Postgres Open conference and keeps chickens. Selena has been working with open source software for over 15 years. She\'s keynoted at SCALE, DjangoCon and LISA, and regularly gives technical talks about Postgres, open source and trolling. She is currently a data architect at Mozilla, makers of the Firefox browser.',
'Selena'),

new Event(
'What I\'ve learned about finding the right IT job by Gabrielle Roth from EnterpriseDB.',
'1-25-2013',
'Ah, the IT department: Strange coworkers, on-call rotations, no budget
for new equipment, and the grim realities of "consultant vs employee".
 We\'ll cover these and a few other situations you can expect to
encounter, and potential coping methods.  Of course, before we can
consider all that, you have to actually have a job - so we\'ll also talk
about ways to make your job hunt more successful:  what\'s worked for me,
what\'s worked for my friends, and (more importantly) what hasn\'t.<br />
<br />
About the Speaker:<br />
<br />
Gabrielle started out her post-college life as a microbiologist and fell
into IT by way of technical writing.  15 or so years later, she still
occasionally wonders what exactly she got herself into, but overall
she\'s having a good time.  Currently, she\'s a Systems Engineer with
EnterpriseDB, a PostgreSQL company.',
'Gabrielle Roth'),

new Event(
'Michael Schern presenting Git For Ages 4 And Up',
'1-18-2013',
'Tinker Toys are the best illustration of a Git repository I\'ve found. Side-by-side with issuing Git commands, 
    we\'ll build a Git repository out of kid\'s toys to show what\'s going on behind the scenes. 
    Mind bending concepts like remote branches, rebase and the staging area become child.s play.<br />
    <br />
    Basic knowledge of git commands is expected of the audience (init, add, commit, diff, log, push, pull).
    If you.ve started using git, but are uncomfortable with it and don.t really get it, this is for you.<br />
    <br />
    WARNING: CHOKING HAZARD - Small Parts. Not For Children Under 4 Years.',
'Michael Schern'),

new Event(
'Volunteer Thank You Meeting',
'12-7-2012',
'We will have a small meating to discuss the ACM and thank the volunteer tutors.',
'ACM Members'),

new Event(
'Secure Boot and Linux',
'11-30-2012',
'Steve Langasek will be talking about Secure Boot and Linux. This will be the last tech talk of the term, so be sure to show up!',
'Steve Langasek'),

new Event(
'Node.js, Socket.io, and More',
'10-26-2012',
'We will have Thomas Schreiber (Ubiquill) talking about node.js, socket.io, and other web development resources.',
'Thomas Schreiber '),

new Event(
"The ACM@PSU Presents: Richard Stallman - Free Software and Your Freedom",
"4-7-2011",
"The Free Software Movement campaigns for computer users' freedom to cooperate and control their own computing. The Free Software Movement developed the GNU operating system, typically used with the Linux kernel, specifically to make these freedoms possible.<br />
<br />
The Portland State University Chapter of the Association for Computing Machinery and the Computer Science Department are proud to welcome Richard Stallman to PSU for this general-interest talk. Mr. Stallman is the father of the free software movement and the concept of 'copyleft', the original author of GNU Emacs, the GNU Compiler Collection, and many of the utilities used in the GNU/Linux operating system.<br />
<br />
This event is free and open to the general public. Mr. Stallman will be available for a brief Q&A session following the talk.<br />
<br />
Doors open at 7pm, the talk begins at 7:30pm.",
"Richard Stallman")
);

?>
