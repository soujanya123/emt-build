<?php
mysql_connect("localhost","emt","changethis") or die(mysql_error());
mysql_select_db("emt") or die(mysql_error());
$result = mysql_query("delete from content"); 

// storing values for coloumb's law experiment
$intro1 = '<p style="font-family:serif;font-size:17px;color:green">
<br /><i><u> Coulomb\'s Law</u></i><br><br /></p>

<p style="font-family:serif;font-size:17px">
Coulomb\'s law is a law of physics describing the electrostatic interaction between electrically charged particles. It was studied and first published in 1783 by French physicist Charles Augustin de Coulomb and was essential for the development of the theory of electromagnetism. <br /><br />
It deals with the force a point charge exerts on another point charge. A point charge means a charge that is located on a body whose dimensions are much smaller than other relevant dimensions. For example, a collection of electric charges on a pinhead can be regarded as a point charge. Charges are generally measured in coulombs(C). One coulomb is approximately equivalent to 6 X 10<sup>18</sup> electrons; it is a very large unit of charge because one electron charge e= -1.6019x10<sup>-19</sup> C.<br /><br />
Coulomb\'s law states that the force between two point charges Q<sub>1</sub> and Q<sub>2</sub> is:<br />
1. Along the line joining them<br />
2. Directly proportional to the product Q<sub>1</sub>Q<sub>2</sub> of the charges<br />
3. Inversely proportional to the square of the distance R between them.<br />
<br />
Expressed mathematically,<br />
<b> &nbsp;&nbsp; <p style="border-style:solid;border-color:#98bf21;margin:3px 0px 3px 0px;margin-right:780px">F = kQ<sub>1</sub>Q<sub>2</sub>/R<sup>2</sup></p></b>

<br /><br /><br />
<i><p align="center" style="color:green;font-size:17p;font-size:17px">The following video may help you to better understand the basic concepts of coloumb\'s law.</p></i>
<br />
<p align="center" style="border-style:groove border-color:98bf21;padding:3px">

<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/H0kkk3Gh0-k?fs=1&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/H0kkk3Gh0-k?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>


</p>

';

$obj1 = '

<p style="font-family:serif;font-size:17px;color:green">
<i>The main objectives of this experiment are the following:</i>
</p>
<ol>
    <li> <p style="font-family:serif;font-size:17px">
 To Verify the Inverse Square Law: F ~ 1/R<sup>2</sup> </p> </li>
    <li> <p style="font-family:serif;font-size:17px">
 To Verify the Force and Charge Relationship: F ~ q<sub>1</sub>q<sub>2</sub> </p></li>
    <li> <p style="font-family:serif;font-size:17px">
To Determine Coulomb\'s constant: k for free space.
    <li>  <p style="font-family:serif;font-size:17px">
 To measure the force on a charge due to multiple charges. </p> </li>
 </ol>
';

$manual1 = '

<p style="font-family:serif;font-size:17px">
Please note the following things from the video:<br /><br />
1. how to <b style="color:green">start</b> experiment <br>
2. how to move on to <b style="color:green">next</b> stage of experiment<br />
3. where to see the output values <br />
4. what are the main concepts in the experiment (shown in the yellow colored text boxes)<br /><br />
Use the video controls to <b>pause</b> the video, <b>replay</b> the video, etc.<br />
<br />
<a href="manual1.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial</li></ul></u></i></a>
</p>
';

$procedure1 = '

<p style="font-family:serif;font-size:17px">
This experiment consists of four stages and each stage will teach you a new concept.<br /> 
 The experiment was designed in a way, so that you can quickly change the parameters and observe the results. This makes you to have a more clear picture of the concepts. <br /><br />
Start the experiment by clicking on <i style="color:green">start</i> button on the top of window.<br /><br>
<ul>
<li>

<p style="font-family:serif;font-size:17px">
<b><u style="color:green">STAGE 1</u>:</b><br /></p></li> 

<p style="font-family:serif;font-size:17px">
In stage 1, we will see the force between two charges q1 and q2, seperated by distance r.<br />
<ol>

<li> <p style="font-family:serif;font-size:17px">Click on any of the charges and move it towards or away from the other charge. Observe the variation with force.</li>
<li> <p style="font-family:serif;font-size:17px">Try to reason the observed values. You can pictorially see the variations in the graph provided at the right of window.</li>
<li> <p style="font-family:serif;font-size:17px">So in the graph you should observe the fact that force is inversely proportional to square of the distance. </li>
<li> <p style="font-family:serif;font-size:17px">To move on to next stage press next button on the top of window.</li>

</ol><br />
<p style="font-family:serif;font-size:17px">
<b><u style="color:green">STAGE 2:</u></b><br /></p></li>

<p style="font-family:serif;font-size:17px">
 In stage 2, the concept is that Force is proportional to product of charges.
<ol>
 <li> <p style="font-family:serif;font-size:17px">You can measure this by changing parameters q1 and q2 by using sliders provided at the bottom of window. </li>
<li> <p style="font-family:serif;font-size:17px">Check if the  graph depicts that the force between two charges is proportional to product of charges.</li>

</ol>
<br />
<br /></p>
<li>

<p style="font-family:serif;font-size:17px">
<b><u style="color:green">STAGE 3</u>:</b><br /></p></li>

<p style="font-family:serif;font-size:17px">
<ol>
<li> <p style="font-family:serif;font-size:17px">In stage 3, observe the k value for free space by varying the charge values. Try to figure it out whether k for free space remains constant or not. See the graph between k for free space and F.</li>
</ol>
<br /></p>
<li>

<p style="font-family:serif;font-size:17px">
<b><u style="color:green">STAGE 4</u>:</b><br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li> <p style="font-family:serif;font-size:17px">In this stage we see an interesting experiment. Try to add charges  to the screen by clicking mouse anywhere on the screen. </li>
<li> <p style="font-family:serif;font-size:17px">Now you can see the resulting force on a charge due to other charges. We use the principle of superposition, 
F<sub>3</sub>=F<sub>13</sub> + F<sub>23</sub></li>
</ol><br><br></p>
';

$virExp1 = '
<p style="font-family:serif;font-size:17px">

<b><u style="color:#B0171F;">Pre-Quiz Questions</u>:</b></br></br></p>
<p style="font-family:serif;font-size:17px">
Test your Understanding on Coloumb\'s law, by going through the following quiz:<br />
&nbsp;&nbsp;<a href="preQuiz1.php" target="_blank"><i style="color:green"><u><ul><li>Start the Quiz</li></ul></u></i></a>
</p><br /><br />
<p style="font-family:serif;font-size:17px">
<b><u style="color:#B0171F">Virtual Experiment</u>:</b><br />
Please make sure that you are going to perform experiment only after going through the following sections:<br /><br />
1. Video Tutorial<br />
2. Procedure<br />
3. Objectives<br />
</p>
 <a href="ve_exp1.html"
onclick="window.open(\'ve_exp1.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;"><br />
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment</li></ul></u></i> 
 </p></a>
<!-- <object codetype="application/java" classid="java:crc.emt.demos.CoulombsLaw$MyApplet.class"  width="900" height="660" title="Electric field">
</object> -->
';

$theory1 = '

<p style="font-family:serif;font-size:17px">
   <b><u><i style="color:green">1. Coulomb\'s law</i></u></b><br><br>

In order to obtain both the magnitude and direction of the force on a charge, q1 at position  r1, experiencing a field due to the presence of another charge, q2 at position  r2, in free space, the Coulomb\'s law is stated as below.<br />


<br />
<img src="pics/colob1.jpg" alt=""><br />

<br />where r is the separation of the two charges. This is simply the scalar definition of Coulomb\'s law with the direction given by the unit vector <embed src="pics/colob-r.jpg"> , parallel with the line from charge q2 to charge q1.<br /><br />
If both charges have the same sign (like charges) then the product q1q2 is positive and the direction of the force on q1 is given by <embed src="pics/colob-r.jpg" alt="">; the charges repel each other. If the charges have opposite signs then the product q1q2 is negative and the direction of the force on q1 is given by <embed src="pics/colob--r.jpg" alt="">; the charges attract each other.<br><br>

<img src="pics/colob2.jpg" alt=""><br><br>

The proportionality constant 1/4&pi;&epsilon;<sub>0</sub>, called the Coulomb constant (k) (sometimes called the Coulomb force constant), is related to defined properties of space.<br />
        k = 1/4&pi;&epsilon;<sub>0</sub> <br>
        &epsilon;<sub>0</sub>=8.85x10<sup>-12</sup> C<sup>2</sup>/N-m<sup>2</sup>  ( &epsilon;<sub>0</sub> is the "permittivity of free space")<br>
        hence k=9x10<sup>9</sup>        <br><br>
                                <img src="images_new/images_force2.jpg" alt="" width="320" height="200">
<br />
If both charges have the same sign (like charges) then the product q<sub>1</sub>q<sub>2</sub> is positive and the direction of the force on q<sub>1</sub> is shown in above figure and the charges repel each other. If the charges have opposite signs then the product q<sub>1</sub>q<sub>2</sub> is negative and the direction of the force on q<sub>1</sub> is shown in above figure and the charges attract each other.

        <br>force on q<sub>2</sub> due to q<sub>1</sub> is <b>F<sub>21</sub></b> = -<b>F<sub>12</sub></b> and it is consistent with Newtons 3<sup>rd</sup> law.
<br><br>
In this experiment, initially F ~ 1/R<sup>2</sup> will be verified using graph :<br><br>
On keeping the value of charges fixed, if value of <b>R</b> ,i.e. distance between 2 point charges is changed we get a graph which shows F ~ 1/R<sup>2</sup><br><br>
<img src="images_new/coulomb5.jpg" alt="" width="200" height="200">


Hence it can be easily seen that F ~ 1/R<sup>2</sup> <br>

 After verifying F ~ 1/R<sup>2</sup>, now F ~ q<sub>1</sub>q<sub>2</sub> will be verified: <br>
<br>
On keeping <b>R</b>, i.e. distance between 2 point charges constant, now if values of q<sub>1</sub> or q<sub>2</sub> or both are varied it can be seen from the graph that change in value of <b>F</b>
will be according to the change in product of charges.<br>

<img src="images_new/coulomb6.jpg" alt="" width="400" height="200">
<br>
It can be seen that F ~ q<sub>1</sub>q<sub>2</sub>
<br>
Now concept of Principle of Superposition will be discussed <br>  <br>

        <b><u><i style="color:green">2. Principle of Superposition</i></u></b><br>
        <br>
Coulomb\'s law can be applied to any pair of point charges. When more than 2 charges are present, the net force on any one of the charge is the vector sum of forces exerted on it by other charges. For ex:<br> If 3 charges are present the net force experienced by q<sub>3</sub> due to q<sub>2</sub>  and q<sub>1</sub> will be <br>
<b>F<sub>3</sub></b>=<b>F<sub>13</sub> </b>+<b> F<sub>23</sub></b> <br><br>. For a system of N charges the net force by the j <sup>th</sup> particle would be <br><br>
<img src="images_new/f_s.jpg" alt="">
<br>
 where <b>F<sub>ij</sub></b> denotes the force between particle i and j. 


<div style="margin-left:0px">
<p style="font-family:serif;font-size:17px">

Example 1)  Three charges are arranged as shown in the figure. Find force on the charge q<sub>3</sub>assuming that q<sub>1</sub> = 6.0x10<sup>6</sup> ,q<sub>2</sub>=-q1, q<sub>3</sub>= q<sub>1</sub>/2 , and r=2.0x10<sup>-2</sup> m.
<br><br>
<img src="images_new/quest.jpg" alt="" width = "400" height="250">
  <br> <b>F<sub>3</sub></b> = <b>F<sub>13</sub></b> + <b>F<sub>23</sub></b>  <br > <br>  <img src="images_new/coulomb1.jpg" alt="" >
        <br>

<b>a<sub>r<sub>13</sub></sub></b> = cos&theta; <b>a<sub>x</sub></b>  + sin&theta; <b>a<sub>y</sub></b>,
<br>
<b>a<sub>r<sub>13</sub></sub></b> = (<b>a<sub>x</sub></b>  +<b>a<sub>y</sub></b> )/2<sup>1/2</sup>,&nbsp;<br>
 <b>a<sub>r<sub>23</sub></sub></b>=<b>a<sub>x</sub></b><br><br>
Hence <b>F<sub>3</sub></b>=3.0N  <br><br>
 &phi;=tan<sup>-1</sup>(<b>F<sub>3,y</sub></b>/<b>F<sub>3,x</sub></b>) =151.3<sup>0</sup>.
<br></p></div></p>
';


$quiz1 = '
<html>
<head>
<font size="3">
<title>Quiz on Inverter</title>

<script>


//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
   numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);
   numCorrect += checkQuestionRadio( document.quiz.q6);
   numCorrect += checkQuestionRadio( document.quiz.q7);
   numCorrect += checkQuestionRadio( document.quiz.q8);
   numCorrect += checkQuestionRadio( document.quiz.q9);
   numCorrect += checkQuestionRadio( document.quiz.q10);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");
   highlightCorrectButton("correct6");
   highlightCorrectButton("correct7");
   highlightCorrectButton("correct8");
   highlightCorrectButton("correct9");
   highlightCorrectButton("correct10");

   //produce output in textarea.
   document.quiz.output.value +=
     "You got " + numCorrect + " out of 10 questions correct.\n" +
     "The correct answers are highlighted." 

}
</script>
</head>
<body>

<form name="quiz">
<ol>
<li><b>If there is a force of 5X10<sup>-9</sup>N acting to the left on an electron, the electric field intensity at the location of electron will be ___</b><br>
   <input type="radio" name="q1" value="wrong">Zero<br>
   <input type="radio" name="q1" value="wrong">8X10<sup>-31</sup> to the left<br>
   <input type="radio" name="q1" value="wrong">3.1X10<sup>7</sup> N/C to the left<br>
   <span id="correct1"><input type="radio" name="q1" value="correct">3.1X10<sup>7</sup> N/C to the right</span><br>
   
</li><br />
<hr><br />

<li><b>In 1 mole or 18gms of Water, the total negative charge of all the electrons is ___.</b><br>
   <input type="radio" name="q2" value="wrong">Zero, because it is electrically neutral<br>
   <input type="radio" name="q2" value="wrong">Less tham 1 C<br>
   <span id="correct2"><input type="radio" name="q2" value="correct">Almost 100,000 C</span><br>
   <input type="radio" name="q2" value="wrong">Almost 1 million C<br>
</li><br />
<hr><br />

<li><b>If a charge \'q\' is placed at the centre of the line joining two equal point charges , each equal to +Q. This system of 3 charges will be in equilibrium if \'q\' is equal to ___</b><br>
   <input type="radio" name="q3" value="wrong">+Q<br>
   <input type="radio" name="q3" value="wrong">+Q/2<br><
   <span id="correct3"><input type="radio" name="q3" value="correct">-Q/4</span><br>
   <input type="radio" name="q3" value="wrong">+Q/4<br>
</li><br />
<hr><br />

<li><b>Electrical charge interaction can be summarized by ___</b><br>
   <input type="radio" name="q4" value="wrong">- charge repels other - charge<br>
   <input type="radio" name="q4" value="wrong">+ charge repels other + charge<br>
   <input type="radio" name="q4" value="wrong"> - charge and + charge attract each other<br>
   <span id="correct4"><input type="radio" name="q4" value="correct">All of these</span><br>
</li><br />
<hr><br />

<li><b>Consider two point charges that are separated by a distance, 2r. If this distance between them is increased to 5 r, the force between the charges is ___</b><br>
   <input type="radio" name="q5" value="wrong">1/25 as great as it had been<br>
   <span id="correct5"><input type="radio" name="q5" value="correct">4/25 as great as it had been</span><br>
   <input type="radio" name="q5" value="wrong">1/9 as great as it had been<br>
   <input type="radio" name="q5" value="wrong">25 times as great as it had been<br>
</li><br />
<hr><br />

<li><b>Consider three identical metal spheres that are mounted on insulating stands. Sphere X is neutral, sphere Y has a charge -1q, and sphere Z has a charge +4q. X and Y are touched together and then separated ___</b><br>
   <span id="correct6"><input type="radio" name="q6" value="correct">Each is now charged, with a charge -0.5 q</span><br>
   <input type="radio" name="q6" value="wrong">Each is now charged, with a charge -1 q<br>
   <input type="radio" name="q6" value="wrong">Sphere X is neutral, sphere Y has a charge -1q<br>
   <input type="radio" name="q6" value="wrong">Sphere X has charge -1 q, sphere Y is now neutral<br>
</li><br />
<hr><br />

<li><b>Consider the electric force between a pair of charged particles a certain distance apart. By Coulomb\'s Law: if the charge on one of the particles is doubled, the force is ___</b><br>
   <input type="radio" name="q7" value="wrong">unchanged<br>
   <input type="radio" name="q7" value="wrong">halved<br>
   <span id="correct7"><input type="radio" name="q7" value="correct">doubled</span><br>
   <input type="radio" name="q7" value="wrong">quadrupled<br>
</li><br />
<hr><br />

<li><b>Consider the electric force between a pair of charged particles a certain distance apart. By Coulomb\'s Law: If, instead, the charge on both particles is doubled, the force is ___</b><br>
   <input type="radio" name="q8" value="wrong">unchanged<br>
<input type="radio" name="q8" value="wrong">halved<br>
   <input type="radio" name="q8" value="wrong">doubled<br>
   <span id="correct8"><input type="radio" name="q8" value="correct">quadrupled</span><br>
</li><br />
<hr><br />

<li><b>Consider the electric force between a pair of charged particles a certain distance apart. By Coulomb\'s Law:if instead the distance between the particles is halved, the force is ___</b><br>
   <input type="radio" name="q9" value="wrong">unchanged<br>
   <input type="radio" name="q9" value="wrong">halved<br>
   <input type="radio" name="q9" value="wrong">doubled<br>
   <span id="correct9"><input type="radio" name="q9" value="correct">quadrupled</span><br>
                                              </li><br />
<hr><br />

<li><b>Point charges Q<sub>1</sub> = 1 nC and Q<sub>2</sub> = 2 nC are at a distance apart. Which of the following
statements are incorrect? ____</b><br>
   <input type="radio" name="q10" value="wrong">The force on Q<sub>1</sub> is repulsive.<br>
   <input type="radio" name="q10" value="wrong">The force on Q<sub>2</sub> is the same in magnitude as that on Qx.<br>
   <span id="correct10"><input type="radio" name="q<sub>10</sub>" value="correct">As the distance between them decreases, the force on Q<sub>1</sub> increases linearly.</span><br>
   <input type="radio" name="q<sub>10</sub>" value="wrong">The force on Q<sub>2</sub> is along the line joining them.<br>
</li><br />
<hr><br />

</ol>

<input type="button" onClick="checkQuiz()" value="check quiz">
<hr>
<textarea cols="80" rows="10" name="output"></textarea>
</form>
</font>
</body>


</html>
';



$ref1 = '
<ol>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Physics for scientists and Engineers with
Modern Physics," New Jersey: Pearson Prentice Hall, 2009 by <i>Douglas C. Giancoli</i></p>.
</li>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Elements of Electromagnetics,"  New York:
Oxford University Press, 2006 by <i> Mattew.N.O.Sadiku</i></p>
</p>
</li>
 <li> 
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Engineering Electromagnetics," New Delhi:  McGraw Hill, 2006.
by  <i>William H. Hayt, Jr., John A. Buck</i>.  </li>
<br /><br />
</ol><br /><br />
<p style="font-family:serif;font-size:17px">
<b><i><u>WEB REFERENCES</u></i></b>: <br /><br>
<a href="http://en.wikipedia.org/wiki/Coulomb\'s_law">en.wikipedia.org/wiki/Coulomb\'s_law<br /></a>
<a href="http://www.answers.com/topic/coulomb-s-law">http://www.answers.com/topic/coulomb-s-law<br /></a>
<a href="http://www.physicsclassroom.com/class/estatics/u8l3b.cfm">http://www.physicsclassroom.com/class/estatics/u8l3b.cfm<br></a>
<a href="http://www.edumedia-sciences.com/en/a120-coulomb-s-law">http://www.edumedia-sciences.com/en/a120-coulomb-s-law<br></a>
<a href="http://webphysics.davidson.edu/physlet_resources/assessment/coulombs_law/part1a.html">http://webphysics.davidson.edu/physlet_resources/assessment/coulombs_law/part1a.html<br></a>

</p>

';


$feedback1 = '
<!--
<html>
<title></title>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="Author" content="cITe">
<meta name="viewport" content="width=1024">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<title>EMT Virtual Lab</title>
<meta name="omni_page" content="cITe - Index">
<link rel="stylesheet" href="cITe/css/base.css" type="text/css">
<link rel="stylesheet" href="cITe/css/mac.css"  type="text/css">
</head>
<body>
<form>
<h3>Feedback of experiment on Coulomb\'s law</h3>
<br><br>
First name:
<input type="text" name="firstname" >
&nbsp;
Last name:
<input type="text" name="lastname" >
<br><br>
Current Year of Study:
<input type="text" name="year">
&nbsp;
Address:
<input type="text" name="address">
<br><br>


<b>1)</b>Rate the material related to the experiment ?
<br>
<input type="radio" name="rate" value"5">5
<br>
<input type="radio" name="rate" value"4">4
<br>
<input type="radio" name="rate" value"3">3
<br>
<input type="radio" name="rate" value"2">2
<br>
<input type="radio" name="rate" value"1">1
<br>
<br><br>
<b>2)</b>Rating of Virtual lab in relation to content and experiment ?
<br>
<input type="radio" name="rate1" value"5">5
<br>
<input type="radio" name="rate1" value"4">4
<br>
<input type="radio" name="rate1" value"3">3
<br>
<input type="radio" name="rate1" value"2">2
<br>
<input type="radio" name="rate1" value"1">1
<br><br>
<b>3)</b>Rating of the Theory in relation to the experiment ?
<br>
<input type="radio" name="rate2" value"5">5
<br>
<input type="radio" name="rate2" value"4">4
<br>
<input type="radio" name="rate2" value"3">3
<br>
<input type="radio" name="rate2" value"2">2
<br>
<input type="radio" name="rate2" value"1">1
<br><br>
<b>4)</b>Rating of the quiz question ?
<br>
<input type="radio" name="rate3" value"5">5
<br>
<input type="radio" name="rate3" value"4">4
<br>
<input type="radio" name="rate3" value"3">3
<br>
<input type="radio" name="rate3" value"2">2
<br>
<input type="radio" name="rate3" value"1">1
<br><br>
<b>5)</b>Rating of Virtual lab in explaining the concepts ?
<br>
<input type="radio" name="rate4" value"5">5
<br>
<input type="radio" name="rate4" value"4">4
<br>
<input type="radio" name="rate4" value"3">3
<br>
<input type="radio" name="rate4" value"2">2
<br>
<input type="radio" name="rate4" value"1">1
<br><br>
<input type="submit" value="Submit">
<br><br>


</form>
</body>
</html>
-->

 <iframe src="https://spreadsheets.google.com/viewform?formkey=dHhHd0dLOEotUURuVnF3azJfS3lGSGc6MQ" width="800" height="2891" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
 
';


$intro1 = mysql_real_escape_string($intro1);
$obj1 = mysql_real_escape_string($obj1);
$manual1 = mysql_real_escape_string($manual1);
$procedure1 = mysql_real_escape_string($procedure1);
$virExp1 = mysql_real_escape_string($virExp1);
$theory1 = mysql_real_escape_string($theory1);
$quiz1 = mysql_real_escape_string($quiz1);
$ref1 = mysql_real_escape_string($ref1);
$feedback1 = mysql_real_escape_string($feedback1);



// storing values for coloumb's law experiment

$intro2 = '
<p style="font-family:serif;font-size:17px;color:green">
<br /><i><u> Electrostatic Field</u></i><br /><br />

<p style="font-family:serif;font-size:17px;">

In 1<sup>st</sup> experiment using Coulomb\'s law we have seen force due to point charges on other. In this experiment we will estimate electric fields due to various charge distributions. <br /><br />
Electric field is defined as the electric force per unit charge. The direction of the field is taken to be the direction of the force it would exert on a positive test charge. The electric field is radially outward from a positive charge and radially in toward a negative point charge. <br /><br />
<img src="pics/Electorstatic.jpg" alt="" width = "600" height="250">
<img src="pics/Electorstatic2.jpg" alt="">
where,<br />
<b>F</b> is the electric force experienced by the particle<br>
<i>q</i> is its charge<br>
<b>E</b> is the electric field wherein the particle is located.<br><br>
<img src="pics/Electorstatic3.jpg" alt=""><br /><br />
In the above figure q<sub>t</sub> is the unit test charge to evaluate the Electric Field. <br />
F<sub>e</sub>  is the force on q<sub>t</sub>  due to the charge at centre.<br />

Now let us evaluate the electric field due to point charge and  uniformly distributed infinite and finite line charges.

<br /><br /><br />
<i><p align="center" style="color:green;font-size:17px">The following video may help you to better understand the basic concepts of Electrostatic Field</p></i>
<br />
        </p></p>

<p align="center" style="border-style:groove border-color:98bf21;padding:3px">
<!--
<object id="MediaPlayer" width=600 height=400 classid="CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95" standby="Loading Windows Media Player components..." type="application/x-oleobject" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112">

<param name="filename" value="2.wmv">
<param name="Showcontrols" value="True">
<param name="autoStart" value="False">


<embed type="application/x-mplayer2" src="2.wmv" name="MediaPlayer" width=600 height=400></embed>
</object>
-->
<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/KItylMj4GrE?fs=1&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/KItylMj4GrE?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>


</p>

';

$obj2 = ' 

<p style="font-family:serif;font-size:17px;color:green">
<i>The main objectives of this experiment are the following:</i>
</p>
<p style="font-family:serif;font-size:17px">
    <ol>
    <li> <p style="font-family:serif;font-size:17px">
To measure the electric field due to a point charge at any point in the space. Plot the graph of electric field as a function of distance and charge.
Also observe the distribution of electric field as a function of distance. </li>
 <li> <p style="font-family:serif;font-size:17px">
To measure the electric field due to a uniformly distributed infinite line charge at any point in the space. Plot the graph of electric field as a function of distance and line charge density. Observe the difference between the plots of point charge.
Also observe the distribution of electric field as a function of distance.  </li>
  <li> <p style="font-family:serif;font-size:17px">
To measure the electric field due to a uniformly distributed finite line charge at any point in the space. Plot the graph of electric field as a function of distance and line charge density. Observe the difference between the plots of infinite line charge.  </li>
 </ol>
</p>
';


$manual2 = '

<p style="font-family:serif;font-size:17px">
Please note the following things from the video:<br /><br />
1. how to <b style="color:green">start</b> experiment <br>
2. how to move on to <b style="color:green">next</b> stage of experiment<br />
3. where to see the output values <br />
4. what are the main concepts in the experiment (shown in the yellow colored text boxes)<br /><br />
Use the video controls to <b>pause</b> the video, <b>replay</b> the video, etc.<br />
<br />
<a href="manual2_1.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial</li></ul></u></i></a>
</p>



';

$procedure2='
<p style="font-family:serif;font-size:17px">

This experiment consists of 3 stages. Each stage depicts the electric field of the charge distribution considered. Changing the sliders, you can see the change in E field. Also the corresponding values related to these are shown in the panel just above the sliders. Also the graphs related to each experiment are shown in the right panel. <br>
In each of the experiments observe the symmetric field surfaces (the surface over which the electric field would be equal) formed by each of the distributions.<br>
<br>

Start the experiment by pressing <i style="color:green">start</i> button<br /><br />
<ul>
<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 1</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li><p style="font-family:serif;font-size:17px">
In the first stage we show E field due to a point Charge.  Vary the charge using slider.</li><li><p style="font-family:serif;font-size:17px">The electric field at any point can be known by pressing at that point using mouse click.</li> <li><p style="font-family:serif;font-size:17px">Also the electric field distribution at a distance r can be seen by moving the distance(r) slider.</li><li><p style="font-family:serif;font-size:17px">Notice the direction of electric field with negative charge.</li><li><p style="font-family:serif;font-size:17px">Click on next button to move to next stage.</li></ol><br /><br />
</p>
<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 2</u></b><br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li><p style="font-family:serif;font-size:17px">During this stage we consider a uniformly distributed infinite line charge.</li><li><p style="font-family:serif;font-size:17px"> Observe it\'s Electric field by changing its linear charge density using slider provided.</li><li><p style="font-family:serif;font-size:17px">Observe the direction of electric field by clicking at any point on the screen.</li><li><p style="font-family:serif;font-size:17px">Also  calculate the electric field distribution at a distance r from the line charge by using the distance slider provided in the bottom panel</li><li><p style="font-family:serif;font-size:17px">Observe the direction of electric field changes when a transition occurs from positive to negative charge occurs.</li><li><p style="font-family:serif;font-size:17px">Find out how  electric field is related to  linear charge density. </li></ol> <br /><br />
</p>

<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 3</u></b><br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li><p style="font-family:serif;font-size:17px">During this stage we consider a uniformly distributed finite line charge and observe it\'s Electric field by changing its linear charge density.</li>    <li><p style="font-family:serif;font-size:17px">Observe the direction of electric field  by clicking at any point on the screen.</li>     <li><p style="font-family:serif;font-size:17px">We can also observe the electric field distribution at a distance r from the line charge by using the distance slider provided in the bottom panel.</li>    <li><p style="font-family:serif;font-size:17px">Here also the direction of electric field changes when a transition occurs from positive to negative charge. Observe how electric field at any point is related to linear charge density. </li>
<ol>
 <br /><br />
</p>

</ul>
';
$virExp2 = '
<p style="font-family:serif;font-size:17px">

<b><u style="color:#B0171F;">Pre-Quiz Questions</u>:</b></br></br></p>
<p style="font-family:serif;font-size:17px">
Test your Understanding on Electrostatics, by going through the following quiz:<br />
&nbsp;&nbsp;<a href="preQuiz21.php" target="_blank"><i style="color:green"><u><ul><li>Start the Quiz</li></ul></u></i></a>
</p><br /><br />
<p style="font-family:serif;font-size:17px">
<b><u style="color:#B0171F">Virtual Experiment</u>:</b><br />
Please make sure that you are going to perform experiment only after going through the following sections:<br /><br />
1. Video Tutorial<br />
2. Procedure<br />
3. Objectives<br />
</p>
 <a href="ve_exp21.html"
onclick="window.open(\'ve_exp21.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;"><br />
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment</li></ul></u></i> 
 </p></a> <br /><br />
<!--
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;<a href="Efields.html" target="_blank"><i style="color:green"><u><ul><li>Electric Field due to different chaged bodies</li></ul></u></i></a>
</p><br /><br />
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;<a href="Efields_old.html" target="_blank"><i style="color:green"><u><ul><li>Electric Field due to different chaged bodies 2</li></ul></u></i></a>
</p><br /><br /> -->
<!-- <object codetype="application/java" classid="java:crc.emt.demos.ElectroStaticForce$MyApplet.class"  width="900" height="660" title="ElectroStatic Force">
</object> -->

';


$theory2 = ' <p>
<p style="font-family:serif;font-size:17px">

1. <u><i style="color:green">Electric Field due to a <b>Point Charge</b> </i></u><br><br>
Based on Coulomb\'s Law, for interacting point charges, the contribution to the E-field at a point in space due to a single, discrete charge located at another point in space is given by the following<br> <br>

<img src="pics/Electorstatic4.jpg">
<br />

where<br>
q is the charge of the particle creating the electric force,<br>
r is the distance from the particle with charge q to the E-field evaluation point,<br>
<embed src="pics/Electorstatic6.jpg"> is the unit vector pointing from the particle with charge q to the E-field evaluation point,<br>
&epsilon; is the electric constant.<br>
The total E-field due to a quantity of point charges, n<sub>q</sub>, is simply the superposition of the contribution of each individual point charge.<br>
<br>
<img src="pics/Electorstatic5.jpg"><br />

<br />
<!--
Electric Field intensity (or Electric Field strength) <b>E</b> is the force per unit charge when placed in electric field. <br>
Thus, <b>E</b> can be for a point charge as: <br>

<img src="electric_field.jpg" alt="center" width="123" height="86">

The Electric Field intensity is in the direction of Force and is measured in newtons/coulomb or volts/meter. The Electric Field at a point
<b>r</b> due to a point charge located at <b>r<sup>\'</sup></b> is obtained as:
<br><img src="electric_field1.jpg" alt="center" width="123" height = "86"><br />

Example 1) Point charges 1 mC and -1 mC are located at (3, 2, - 1 ) and (-1, -1, 4) respectively.
<br>
Calculate electric field on 1mC charge due to -1 mC charge ?<br>
<br>Solution 1)
<br>
<br><img src="electric_field2.jpg" alt="center" width="370" height="140"><br> -->

2. <u><i style="color:green">Electric field due to <b>Infinite and Finite Line Charges</i></u></b><br><br>
Consider a line charge element <i>dQ</i> with uniform charge density &rho;<sub>L</sub> extending from A to B along z-axis.The charge element <i>dQ</i> associated with the element <i>dl</i> = <i>dz</i> of the line is
dQ = &rho;<sub>L</sub>dl &nbsp; Hence the total charge is Q = &int;&rho;<sub>L</sub>dl.  &nbsp;&nbsp;(line charge)
<!--    </tr> </table>--><br/>
                        <img src="exp2_line.jpg" alt="center" width="360" height="290"><br>

The electric field at any arbit point can be given by :<br>

                <img src="electric_field3.jpg" alt="center" width="150" height="60">
<br><br>
Let the field point be (x,y,z) and source point be (x\',y\',z\')
<br>
dl=dz\'<br>
 &nbsp; <b>R</b> = (x,y,z)-(0,0,z\') <br>
&nbsp; <b>R</b> =  x<b>a</b><sub>x</sub> + y<b>a</b><sub>y</sub> + (z-z\')<b>a</b><sub>z</sub>
<br>
&nbsp; <b>R</b> = &rho;<b>a</b><sub>&rho;</sub> + (z-z\')<b>a</b><sub>z</sub>
<br>
<br>

&nbsp; R<sup>2</sup>=|<b>R</b>|<sup>2</sup>,<br>
&nbsp; <b>a</b><sub>R</sub>/R<sup>2</sup> = <b>R</b>/|<b>R</b>|<sup>3</sup> <br>
<br>
Hence<br>

<img src="electric_field4.jpg" alt="center" width="300" height="50"><br><br>

 Thus for finite line charge :
<br><br>
<b>E</b> = (&rho;<sub>L</sub>/4&pi;&epsilon;<sub>0</sub>&rho;)[-(sin&alpha;<sub>2</sub> - sin&alpha;<sub>1</sub>)<b>a</b><sub>&rho;</sub> + (cos&alpha;<sub>2</sub> - cos&alpha;<sub>1</sub>)<b>a</b><sub>z</sub>]
<br><br>

So for an infinite line charge, point B is at (0,0,&infin;) and A at(0,0,-&infin;) so that &alpha;<sub>1</sub> = &pi;/2, &alpha;<sub>2</sub> = -&pi;/2; and z component vanishes. so <b>E</b> is <br><br>
<b>E</b>= (&rho;<sub>L</sub>/2&pi;&epsilon;<sub>0</sub>)<b>a</b><sub>&rho;</sub> .
<br><br>
Here <b>E</b> is obtained for infinite line charge along z-axis so that &rho; and <b>a</b><sub>&rho;</sub> have their usual meaning. If line is not along z-axis, &rho;is perpendicular distance from the line to the point of interest and <b>a</b><sub>&rho;</sub> is a unit vector along distance directed from line charge to field point.
<br>
<br>


<br>
</div></p>'
;


$quiz2 = '
<html>
<head>
<font size="3">
<title>Quiz on Inverter</title>

<script>


//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
   numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);
   numCorrect += checkQuestionRadio( document.quiz.q6);
   numCorrect += checkQuestionRadio( document.quiz.q7);
   numCorrect += checkQuestionRadio( document.quiz.q8);
   numCorrect += checkQuestionRadio( document.quiz.q9);
   numCorrect += checkQuestionRadio( document.quiz.q10);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");
   highlightCorrectButton("correct6");
   highlightCorrectButton("correct7");
   highlightCorrectButton("correct8");
   highlightCorrectButton("correct9");
   highlightCorrectButton("correct10");

   //produce output in textarea.
   document.quiz.output.value +=
     "You got " + numCorrect + " out of 10 questions correct.\n" +
     "The correct answers are highlighted." 

}
</script>
</head>
<body>

<form name="quiz">
<ol>
<li><b>The electric field is zero ___</b><br>
   <input type="radio" name="q1" value="wrong">is always zero inside the conductor<br>
   <input type="radio" name="q1" value="wrong">inside any conductor with a static charge.<br>
   <input type="radio" name="q1" value="wrong">Never<br>
   <span id="correct1"><input type="radio" name="q1" value="correct">inside conductor provided no voltage drop exists across it.</span><br>
</li><br />
<hr><br />

<li><b>Nine negative charges, each of magnitude Q are arranged symmetrically along the circumference of a circle of radius R. The electric field at the centre of the circle is ___</b><br>
   <input type="radio" name="q2" value="wrong">kQ/R<sup>2</sup><br>
   <input type="radio" name="q2" value="wrong">9kQ/R<sup>2</sup><br>
   <input type="radio" name="q2" value="wrong">-9kQ/R<sup>2</sup><br>
   <span id="correct2"><input type="radio" name="q2" value="correct">Zero</span><br>
</li><br />
<hr><br />

<li><b>Positive charge +Q is uniformly distributed on the upper half a rod and a negative charge -Q is uniformly distributed on the lower half. It is placed along X- axis with its center at origin. What is the direction of the electric field at point P, on the perpendicular bisector of the rod ___ </b><br>
   <input type="radio" name="q3" value="wrong"> - Y-axis<br>
   <input type="radio" name="q3" value="wrong"> + Y-axis<br>
   <span id="correct3"><input type="radio" name="q3" value="correct"> + X-axis</span><br>
   <input type="radio" name="q3" value="wrong"> - X-axis<br>
</li><br />
<hr><br />

<li><b>Two point charges, q1 and q2, are placed a distance r apart. The electric field is zero at a point P between the charges on the line segment connecting them. We conclude that ___ </b><br>
   <span id="correct4"><input type="radio" name="q4" value="correct">q1 and q2 must have the same magnitude and sign </span><br>
   <input type="radio" name="q4" value="wrong">P must be midway between q1 and q2<br>
   <input type="radio" name="q4" value="wrong">q1 and q2 must have opposite signs and may have different magnitudes <br>
   <input type="radio" name="q4" value="wrong">q1 and q2 must have equal magnitudes and opposite signs <br>
</li><br />
<hr><br />

<li><b>Which of the following represents a symmetric E field surface for uniformly distributed line charge:</b><br>
   <input type="radio" name="q5" value="wrong">cone<br>
   <input type="radio" name="q5" value="wrong">reactangular box which is cut by charge symmetrically<br>
   <span id="correct5"><input type="radio" name="q5" value="correct">cylinder</span><br>
   <input type="radio" name="q5" value="wrong">sphere<br>
</li><br />
<hr><br />

<li><b>Can a finite line charge be treated as point charge</b><br>
	<span id="correct6"><input type="radio" name="q6" value="correct">yes</span><br>
   <input type="radio" name="q6" value="wrong">no<br>
   <input type="radio" name="q6" value="wrong">none of the above<br>
</li><br />
<hr><br />

<li><b>The circumstance under which line charge can be treated as point charge is_</b><br>
   <span id="correct7"><input type="radio" name="q7" value="correct">E field is being measured at a distance which is much larger than the dimensions of the line</span><br>
   <input type="radio" name="q7" value="wrong">E field is measured on the line charge<br>
   <input type="radio" name="q7" value="wrong">it can never be treated so<br>
   <input type="radio" name="q7" value="wrong">None of the above<br>
</li><br />
<hr><br />

<li><b> In case of dipole the E field at a point is ___</b><br>
   <span id="correct8"><input type="radio" name="q8" value="correct">inversely proportional to cube of distance</span><br>
   <input type="radio" name="q8" value="wrong">inversely proportional to square of distance<br>
   <input type="radio" name="q8" value="wrong">inversely proportional to distance<br>
   <input type="radio" name="q8" value="wrong">inversely proportional to fourth power of distance<br>
</li><br />
<hr><br />

<li><b>E field due to a system of quadrupole is</b><br>
   <input type="radio" name="q9" value="wrong">inversely proportional to cube of distance<br>
   <input type="radio" name="q9" value="wrong">inversely proportional to square of distance<br>
   <input type="radio" name="q9" value="wrong">inversely proportional to distance<br>
   <span id="correct9"><input type="radio" name="q9" value="correct">inversely proportional to fifth power of distance</span><br>
</li><br />
<hr><br />


<li><b>Electric flux lines : </b><br>
   <input type="radio" name="q10" value="wrong">emanate from positive charge<br>
   <input type="radio" name="q10" value="wrong">converge on negative charge<br>
   <span id="correct10"><input type="radio" name="q10" value="correct">both the above</span><br>
   <input type="radio" name="q10" value="wrong">none of the above<br>
</li><br />
<hr><br /> 

</ol>

<input type="button" onClick="checkQuiz()" value="check quiz">
<hr>
<textarea cols="80" rows="10" name="output"></textarea>
</form>
</font>
</body>


</html>';



$ref2 = '
<ol>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Physics for scientists and Engineers with
Modern Physics," New Jersey: Pearson Prentice Hall, 2009 by <i>Douglas C. Giancoli</i></p>.
</li>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Elements of Electromagnetics,"  New York:
Oxford University Press, 2006 by <i> Mattew.N.O.Sadiku</i></p>
</p>
</li>
 <li> 
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Engineering Electromagnetics," New Delhi:  McGraw Hill, 2006.
by  <i>William H. Hayt, Jr., John A. Buck</i>.  </li>
<br /><br />
</ol>
<p style="font-family:serif;font-size:17px">
<b><i><u>WEB REFERENCES</u></i></b>: <br /><br>
<a href="http://www.cliffsnotes.com/study_guide/Electrostatics.topicArticleId-10453,articleId-10431.html">http://www.cliffsnotes.com/study_guide/Electrostatics.topicArticleId-10453,articleId-10431.html<br></a>
<a href="http://hyperphysics.phy-astr.gsu.edu/hbase/electric/elesht.html">http://hyperphysics.phy-astr.gsu.edu/hbase/electric/elesht.html<br></a>
<a href="http://webphysics.davidson.edu/physlet_resources/bu_semester2/c03_inf_sheet.html">http://webphysics.davidson.edu/physlet_resources/bu_semester2/c03_inf_sheet.html<br></a>
</p>
';

$feedback2 = '
<html>
<title></title>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="Author" content="cITe">
<meta name="viewport" content="width=1024">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<title>EMT Virtual Lab</title>
<meta name="omni_page" content="cITe - Index">
<link rel="stylesheet" href="cITe/css/base.css" type="text/css">
<link rel="stylesheet" href="cITe/css/mac.css"  type="text/css">
</head>
<body>
<form>
<h3>Feedback of experiment on Electrostatic Fields</h3>
<br><br>
First name:
<input type="text" name="firstname" >
&nbsp;
Last name:
<input type="text" name="lastname" >
<br><br>
Current Year of Study:
<input type="text" name="year">
&nbsp;
Address:
<input type="text" name="address">
<br><br>


<b>1)</b>Rate the material related to the experiment ?
<br>
<input type="radio" name="rate" value"5">5
<br>
<input type="radio" name="rate" value"4">4
<br>
<input type="radio" name="rate" value"3">3
<br>
<input type="radio" name="rate" value"2">2
<br>
<input type="radio" name="rate" value"1">1
<br>
<br><br>
<b>2)</b>Rating of Virtual lab in relation to content and experiment ?
<br>
<input type="radio" name="rate1" value"5">5
<br>
<input type="radio" name="rate1" value"4">4
<br>
<input type="radio" name="rate1" value"3">3
<br>
<input type="radio" name="rate1" value"2">2
<br>
<input type="radio" name="rate1" value"1">1
<br><br>
<b>3)</b>Rating of the Theory in relation to the experiment ?
<br>
<input type="radio" name="rate2" value"5">5
<br>
<input type="radio" name="rate2" value"4">4
<br>
<input type="radio" name="rate2" value"3">3
<br>
<input type="radio" name="rate2" value"2">2
<br>
<input type="radio" name="rate2" value"1">1
<br><br>
<b>4)</b>Rating of the quiz question ?
<br>
<input type="radio" name="rate3" value"5">5
<br>
<input type="radio" name="rate3" value"4">4
<br>
<input type="radio" name="rate3" value"3">3
<br>
<input type="radio" name="rate3" value"2">2
<br>
<input type="radio" name="rate3" value"1">1
<br><br>
<b>5)</b>Rating of Virtual lab in explaining the concepts ?
<br>
<input type="radio" name="rate4" value"5">5
<br>
<input type="radio" name="rate4" value"4">4
<br>
<input type="radio" name="rate4" value"3">3
<br>
<input type="radio" name="rate4" value"2">2
<br>
<input type="radio" name="rate4" value"1">1
<br><br>
<input type="submit" value="Submit">
<br><br>


</form>
</body>
</html>
';

$intro2 = mysql_real_escape_string($intro2);
$obj2 = mysql_real_escape_string($obj2);
$manual2 = mysql_real_escape_string($manual2);
$procedure2 = mysql_real_escape_string($procedure2);
$virExp2 = mysql_real_escape_string($virExp2);
$theory2 = mysql_real_escape_string($theory2);
$quiz2 = mysql_real_escape_string($quiz2);
$ref2 = mysql_real_escape_string($ref2);
$feedback2 = mysql_real_escape_string($feedback2);



// storing values for coloumb's law experiment

$intro10 = '
<p style="font-family:serif;font-size:17px;color:green">
<br /><i><u> Electrostatic Field</u></i><br /><br />

<p style="font-family:serif;font-size:17px;">

In this experiment we will continue to evaluate electric fields for surface charge, volume charges and conductor.


<br /><br /><br />
<i><p align="center" style="color:green;font-size:17px">The following video may help you to better understand the basic concepts of Electrostatic Field</p></i>
<br />
        </p></p>

<p align="center" style="border-style:groove border-color:98bf21;padding:3px">
<!--
<object id="MediaPlayer" width=600 height=400 classid="CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95" standby="Loading Windows Media Player components..." type="application/x-oleobject" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112">

<param name="filename" value="2.wmv">
<param name="Showcontrols" value="True">
<param name="autoStart" value="False">


<embed type="application/x-mplayer2" src="2.wmv" name="MediaPlayer" width=600 height=400></embed>
</object>
-->
<iframe width="420" height="315" src="http://www.youtube.com/embed/dNgucp8LT2s" frameborder="0" allowfullscreen></iframe>


</p>

';

$obj10 = ' 

<p style="font-family:serif;font-size:17px;color:green">
<i>The main objectives of this experiment are the following:</i>
</p>
<p style="font-family:serif;font-size:17px">
    <ol>
  <li> <p style="font-family:serif;font-size:17px">
To measure the electric field due to a infinite surface charge at any point in the space. Plot the graph of electric field as a function of distance and surface charge density. </li>
 <li>  <p style="font-family:serif;font-size:17px">
To measure the electric field due to a uniformly distributed volume charge at any point in the space. Plot the graph of electric field as a function of distance and volume charge density.</li>
 <li>  <p style="font-family:serif;font-size:17px">
To measure the electric field due to a spherical conductor.  Plot the graph of electric field as a function of distance. Observe the difference between the plots of volume charge. Also observe the distribution of electric field as a function of distance</li>
 </ol>
</p>
';


$manual10 = '

<p style="font-family:serif;font-size:17px">
Please note the following things from the video:<br /><br />
1. how to <b style="color:green">start</b> experiment <br>
2. how to move on to <b style="color:green">next</b> stage of experiment<br />
3. where to see the output values <br />
4. what are the main concepts in the experiment (shown in the yellow colored text boxes)<br /><br />
Use the video controls to <b>pause</b> the video, <b>replay</b> the video, etc.<br />
<br />
<a href="manual2_2_1.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial I</li></ul></u></i></a>
<a href="manual2_2_2.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial II</li></ul></u></i></a>
<a href="manual2_2_3.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial III</li></ul></u></i></a>
</p>



';

$procedure10='
<p style="font-family:serif;font-size:17px">

This experiment consists of 3 parts. Each part depicts the electric field of the charge distribution considered. Changing the sliders, you can see the change in E field. Also the corresponding values related to these are shown in the panel just above the sliders. Also the graphs related to each experiment are shown in the right panel. <br>
In each of the experiments observe the symmetric field surfaces (the surface over which the electric field would be equal) formed by each of the distributions.<br>
<br>

Start the experiment by pressing <i style="color:green">start</i> button<br /><br />
<ul>

<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">Part 1 </u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li><p style="font-family:serif;font-size:17px"> In this stage we observe the behavior of electric field due to an infinite sheet.</li>   <li><p style="font-family:serif;font-size:17px"> Measure the change in electric field at any point when surface charge density changes .This can be observed by manipulating the sliders provided.</li>    <li><p style="font-family:serif;font-size:17px">An animation is shown in this experiment on how the electric field is behaving at each point in the space.</li>    <li><p style="font-family:serif;font-size:17px">Observe carefully and see how electric field due to the infinite sheet is dependent on the distance r.</li></ol><br />
</p>
<br />
<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">Part 2</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li><p style="font-family:serif;font-size:17px"> In this stage we observe the behaviour of electric field due to a conductor.</li>     <li><p style="font-family:serif;font-size:17px">When the charge density of the volume charge increases  measure how  magnitude of electric field varies.This can be observed by manipulating the sliders provided.</li>     <li><p style="font-family:serif;font-size:17px">Observe electric field inside the conductor. See where, the charge is residing on sphere (is shown in experiment by + signs on the surface of conducting sphere.)</li>    <li><p style="font-family:serif;font-size:17px">The conducting sphere behaves similar to point charge, except for one difference. This difference can be seen from the graphs shown in right side of window.</li></ol><br /><br />
</p>
<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">Part 3</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol><li><p style="font-family:serif;font-size:17px">In this stage we observe the behavior of electric field due to a Volume Charge.</li>    <li><p style="font-family:serif;font-size:17px">When the charge density of the conducting charge increases the magnitude of electric field has to be measured. This can be observed by manipulating the sliders provided.</li>     <li><p style="font-family:serif;font-size:17px">Observe the electric field inside the volume charge, and compare with that of Conductor.  Charge of conducting sphere is present only on the surface, but what about the volume charge.</li>    <li><p style="font-family:serif;font-size:17px">Inside volume charge, measure how E is related to distance of point from center of volume charge.    Outside the volume charge, measure how electric field is related to distance (same as for conductor). This difference can be seen from the graphs shown in right side of window.</li></ol><br />
</p>
</ul>
';
$virExp10 = '
<p style="font-family:serif;font-size:17px">

<b><u style="color:#B0171F;">Pre-Quiz Questions</u>:</b></br></br></p>
<p style="font-family:serif;font-size:17px">
Test your Understanding on Electrostatics, by going through the following quiz:<br />
&nbsp;&nbsp;<a href="preQuiz22.php" target="_blank"><i style="color:green"><u><ul><li>Start the Quiz</li></ul></u></i></a>
</p><br /><br />
<p style="font-family:serif;font-size:17px">
<b><u style="color:#B0171F">Virtual Experiment</u>:</b><br />
Please make sure that you are going to perform experiment only after going through the following sections:<br /><br />
1. Video Tutorial<br />
2. Procedure<br />
3. Objectives<br />
</p>

 <a href="ve_exp22_1.html"
onclick="window.open(\'ve_exp22_1.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;"><br />
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment: surface charge</li></ul></u></i> 
 </p></a>

 <a href="ve_exp22_2.html"
onclick="window.open(\'ve_exp22_2.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;">
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment: volume charge</li></ul></u></i> 
 </p></a>


 <a href="ve_exp22_3.html"
onclick="window.open(\'ve_exp22_3.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;">
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment:conductor</li></ul></u></i> 
 </p></a> <br />

<br />
<!-- <object codetype="application/java" classid="java:crc.emt.demos.ElectroStaticForce$MyApplet.class"  width="900" height="660" title="ElectroStatic Force">
</object> -->

';


$theory10 = ' <p>
<p style="font-family:serif;font-size:17px">


1. <u><i style="color:green">Electric field due to a <b>Surface Charge</b></i></u>:
<br><br>
Consider an infinite sheet of charge in the xy-plane with uniform charge density &rho;<sub>s</sub>. The charge associated with an elemental area d<i>S</i> is
<br>
d<i>Q</i> = &rho;<sub>s</sub> d<i>S</i>
<br>
So the total charge is Q = &int;&rho;<sub>s</sub> d<i>S</i>
<img src="exp2_surface.jpg" alt="center" width="400" height="300"><br><br>
Thus the contribution to the <b>E</b> at point P(0,0,h) by the elemental surface is
<br><br>
d<b>E</b> = d<i>Q</i> <b>a</b><sub>R</sub>/4&pi;&epsilon;<sub>0</sub>R<sup>2</sup>.
<br><br>
<b>R</b> = &rho;(-<b>a</b><sub>&rho;</sub>)+h<b>a</b><sub>z</sub>, R= |<b>R</b>| = [&rho;<sup>2</sup> + h<sup>2</sup>]<sup>1/2</sup> <br>
<br><b>a</b><sub>R</sub>= <b>R</b>/R,<i>dQ</i> = &rho;<sub>s</sub>dS = &rho;<sub>s</sub>&rho; d&phi; d&rho; <br><br>
<b>E</b>= &int; dE<sub>z</sub>
<br><br>
<b>E</b> = &rho;<sub>s</sub><b>a<sub>z</sub></b>/2&epsilon;<sub>0</sub> <br><br>
This is only z-component of Electric field if the charge is in x-y plane. For infinite sheet of charge<br>
 <b>E</b> = &rho;<sub>s</sub><b>a</b><sub>n</sub>/2&epsilon;<sub>0</sub>
<br><br>
For a parallel plate capacitor <b>E</b>= &rho;<sub>s</sub><b>a<sub>n</sub></b>/&epsilon;<sub>0</sub>. <br>
        <br/>
2. <u><i style="color:green">Electric field due to <b>Volume Charge Distribution</b><br></i></u><br>
Let the volume charge distribution with uniform charge density &rho;<sub>v</sub>, So charge <i>dQ</i> associated with the elemental volume <i>dv</i> is <br>
d<i>Q</i> = &rho;<sub>v</sub><i>dv</i><br>
<img src="exp2_volume.jpg" alt="center" width="410" height="310">
<br>
<br><br>

The total charge in a sphere of radius \'a\' is
<br><br>
Q = &int; &rho;<sub>v</sub><i>dv</i> = &rho;<sub>v</sub> &int;<i>v</i>
<br><br>
Q = &rho;<sub>v</sub> 4&pi; a<sup>3</sup>/3 ;<br>
<br>
The Electric field at point (0,0,z) is <br>
d<b>E</b> = &rho;<sub>v</sub><i>dv</i><b>a<sub>R</sub></b>/4&pi;&epsilon;<sub>0</sub>R<sup>2</sup>
<br><br>
&nbsp;<b>a<sub>R</sub></b> = cos&alpha; <b>a</b><sub>z</sub> + sin&alpha; <b>a</b><sub>&rho;</sub>.Due to symmetry of charge distribution we have <b>E</b><sub>x</sub> + <b>E</b><sub>y</sub> =0.
<br><br>
<b>E</b><sub>z</sub> = &int; d<b>E</b>cos&alpha; = (&rho;<sub>v</sub>)/4&pi;&epsilon;<sub>0</sub> &int; dv cos&alpha;/R<sup>2</sup> <br>
dv = r<sup>\'2</sup>sin&theta;<sup>\'</sup>dr<sup>\'</sup>d&theta;<sup>\'</sup>d&phi;<sup>\'</sup> <br>
R<sup>\'</sup> = z<sup>2</sup> + r<sup>\'2</sup> - 2zr<sup>\'</sup>cos&theta; <sup>\'</sup><br>
r<sup>\'</sup> = z<sup>2</sup> + R<sup>2</sup> - 2zRcos&alpha; <br>
<br>
using all the substitutions and solving the integration the electric field at (0,0,z) is: <br>
<b>E</b><sub>z</sub> = <b>E</b> = Q<b>a</b><sub>z</sub>/ 4&pi;&epsilon;<sub>0</sub>z<sup>2</sup> <br><br>
Due to the symmetry of the charge distribution, the electric field at (0,0,z) is readily obtained from <br>
     E= Q/4&pi;&epsilon;<sub>0</sub>r<sup>2</sup>
which is identical to the electric field at the same point due to a point charge Q located at
the origin or the center of the spherical charge distribution.<br>

<br>
3. <u><i style="color:green">Electric field due to <b>Conductor</b><br></i></u><br>

In case of conductor charge resides only on the surface of it. Charge inside the conductor is zero. Hence Electric field inside the conductor is zero. Outside the conductor the charge acts as a point charge placed at the centre of the conductor.<br />

</div></p>'
;


$quiz10 = '
<html>
<head>
<font size="3">
<title>Quiz on Inverter</title>

<script>


//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
   numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);
   numCorrect += checkQuestionRadio( document.quiz.q6);
   numCorrect += checkQuestionRadio( document.quiz.q7);
   numCorrect += checkQuestionRadio( document.quiz.q8);
   numCorrect += checkQuestionRadio( document.quiz.q9);
   numCorrect += checkQuestionRadio( document.quiz.q10);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");
   highlightCorrectButton("correct6");
   highlightCorrectButton("correct7");
   highlightCorrectButton("correct8");
   highlightCorrectButton("correct9");
   highlightCorrectButton("correct10");

   //produce output in textarea.
   document.quiz.output.value +=
     "You got " + numCorrect + " out of 10 questions correct.\n" +
     "The correct answers are highlighted." 

}
</script>
</head>
<body>

<form name="quiz">
<ol>
<li><b>Which of the following represents a symmetric E field surface for uniformly distributed infinite sheet  charge</b><br>
   <input type="radio" name="q1" value="wrong">cone<br>
   <input type="radio" name="q1" value="wrong"> rectangular box which is cut by charge distribution symmetrically<br>
   <input type="radio" name="q1" value="wrong">cylinder<br>
   <span id="correct1"><input type="radio" name="q1" value="correct">sphere</span><br>
</li><br />
<hr><br />

<li><b>Which of the following represents a symmetric E field surface for uniformly distributed volume charge:</b><br>
   <input type="radio" name="q2" value="wrong">cone<br>
   <input type="radio" name="q2" value="wrong">rectangular box which is cut by charge symmetrically<br>
   <input type="radio" name="q2" value="wrong">cylinder<br>
   <span id="correct2"><input type="radio" name="q2" value="correct">sphere</span><br>
</li><br />
<hr><br />

<li><b>Pcoulombs charge is placed at the centre of  a conductor. Later charge at the centre would be: </b><br>
   <input type="radio" name="q3" value="wrong"> 10C<br>
   <input type="radio" name="q3" value="wrong"> 5C<br>
   <span id="correct3"><input type="radio" name="q3" value="correct">zero</span><br>
   <input type="radio" name="q3" value="wrong">none of the above<br>
</li><br />
<hr><br />

<li><b>At a distance comparable to the dimensions of the surface charge E field due to it is </b><br>
   <input type="radio" name="q4" value="wrong">independent of the distance<br>
   <span id="correct4"><input type="radio" name="q4" value="correct">dependent on distance</span><br>
   <input type="radio" name="q4" value="wrong">cannot be determined<br>
   <input type="radio" name="q4" value="wrong">none of the above <br>
</li><br />
<hr><br />

<li><b>10 C of charge are placed on a spherical conducting shell. A -3 C point charge is placed at the center of the cavity. The net charge in coulombs on the outer surface of the shell is ___</b><br>
   <input type="radio" name="q5" value="wrong">-7<br>
   <input type="radio" name="q5" value="wrong">3<br>
   <span id="correct5"><input type="radio" name="q5" value="correct">10</span><br>
   <input type="radio" name="q5" value="wrong">1<br>
</li><br />
<hr><br />

<li><b>The intensity of electric field between two parallel charged plates is 5N per coulomb then the fore exerted on a 2.0 coulomb charge placed between the plates is ___</b><br>
   <input type="radio" name="q6" value="wrong">0.40<br>
   <input type="radio" name="q6" value="wrong">2.5<br>
   <input type="radio" name="q6" value="wrong">7<br>
   <span id="correct6"><input type="radio" name="q6" value="correct">10</span><br>
</li><br />
<hr><br />

<li><b>Plane z = 10 m carries charge 20 nC/m<sup>2</sup>. The electric field intensity at the origin is ___</b><br>
   <input type="radio" name="q7" value="wrong">-10 a<sub>z</sub>V/m<br>
   <input type="radio" name="q7" value="wrong">-18 &pi; a<sub>z</sub>V/m<br>
   <input type="radio" name="q7" value="wrong">-72 &pi; a<sub>z</sub>V/m<br>
   <span id="correct7"><input type="radio" name="q7" value="correct">-360 &pi; a<sub>z</sub>V/m</span><br>
</li><br />
<hr><br />

<li><b> To treat a ellipsoid volume charge as a point charge the E field calculated must be</b><br>
   <input type="radio" name="q8" value="wrong">at a distance comparable to its dimensions<br>
   <span id="correct8"><input type="radio" name="q8" value="correct">at distances larger compared to its dimensions</span><br>
   <input type="radio" name="q8" value="wrong">it can never be treated as point charge<br>
   <input type="radio" name="q8" value="wrong">none of the above<br>
</li><br />
<hr><br />

<li><b>Electric fields due to non uniform distributions cannot be obtained using Gauss’s law</b><br>
   <input type="radio" name="q9" value="wrong">True<br>
   <span id="correct9"><input type="radio" name="q9" value="correct">False</span><br>
   <input type="radio" name="q9" value="wrong">depends on non uniformity<br>
   <input type="radio" name="q9" value="wrong">None of the above<br>
</li><br />
<hr><br />


<li><b>Which of the following represents a symmetric E field surface for uniformly distributed volume charge:</b><br>
   <span id="correct10"><input type="radio" name="q10" value="correct">yes</span><br>
   <input type="radio" name="q10" value="wrong">no<br>
   <input type="radio" name="q10" value="wrong">insufficient data<br>
   <input type="radio" name="q10" value="wrong">none of the above<br>
</li><br />
<hr><br /> 

</ol>

<input type="button" onClick="checkQuiz()" value="check quiz">
<hr>
<textarea cols="80" rows="10" name="output"></textarea>
</form>
</font>
</body>


</html>';



$ref10 = '
<ol>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Physics for scientists and Engineers with
Modern Physics," New Jersey: Pearson Prentice Hall, 2009 by <i>Douglas C. Giancoli</i></p>.
</li>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Elements of Electromagnetics,"  New York:
Oxford University Press, 2006 by <i> Mattew.N.O.Sadiku</i></p>
</p>
</li>
 <li> 
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Engineering Electromagnetics," New Delhi:  McGraw Hill, 2006.
by  <i>William H. Hayt, Jr., John A. Buck</i>.  </li>
<br /><br />
</ol>
<p style="font-family:serif;font-size:17px">
<b><i><u>WEB REFERENCES</u></i></b>: <br /><br>
<a href="http://www.cliffsnotes.com/study_guide/Electrostatics.topicArticleId-10453,articleId-10431.html">http://www.cliffsnotes.com/study_guide/Electrostatics.topicArticleId-10453,articleId-10431.html<br></a>
<a href="http://hyperphysics.phy-astr.gsu.edu/hbase/electric/elesht.html">http://hyperphysics.phy-astr.gsu.edu/hbase/electric/elesht.html<br></a>
<a href="http://webphysics.davidson.edu/physlet_resources/bu_semester2/c03_inf_sheet.html">http://webphysics.davidson.edu/physlet_resources/bu_semester2/c03_inf_sheet.html<br></a>
</p>
';

$feedback10 = '
<html>
<title></title>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="Author" content="cITe">
<meta name="viewport" content="width=1024">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<title>EMT Virtual Lab</title>
<meta name="omni_page" content="cITe - Index">
<link rel="stylesheet" href="cITe/css/base.css" type="text/css">
<link rel="stylesheet" href="cITe/css/mac.css"  type="text/css">
</head>
<body>
<form>
<h3>Feedback of experiment on Electrostatic Fields</h3>
<br><br>
First name:
<input type="text" name="firstname" >
&nbsp;
Last name:
<input type="text" name="lastname" >
<br><br>
Current Year of Study:
<input type="text" name="year">
&nbsp;
Address:
<input type="text" name="address">
<br><br>


<b>1)</b>Rate the material related to the experiment ?
<br>
<input type="radio" name="rate" value"5">5
<br>
<input type="radio" name="rate" value"4">4
<br>
<input type="radio" name="rate" value"3">3
<br>
<input type="radio" name="rate" value"2">2
<br>
<input type="radio" name="rate" value"1">1
<br>
<br><br>
<b>2)</b>Rating of Virtual lab in relation to content and experiment ?
<br>
<input type="radio" name="rate1" value"5">5
<br>
<input type="radio" name="rate1" value"4">4
<br>
<input type="radio" name="rate1" value"3">3
<br>
<input type="radio" name="rate1" value"2">2
<br>
<input type="radio" name="rate1" value"1">1
<br><br>
<b>3)</b>Rating of the Theory in relation to the experiment ?
<br>
<input type="radio" name="rate2" value"5">5
<br>
<input type="radio" name="rate2" value"4">4
<br>
<input type="radio" name="rate2" value"3">3
<br>
<input type="radio" name="rate2" value"2">2
<br>
<input type="radio" name="rate2" value"1">1
<br><br>
<b>4)</b>Rating of the quiz question ?
<br>
<input type="radio" name="rate3" value"5">5
<br>
<input type="radio" name="rate3" value"4">4
<br>
<input type="radio" name="rate3" value"3">3
<br>
<input type="radio" name="rate3" value"2">2
<br>
<input type="radio" name="rate3" value"1">1
<br><br>
<b>5)</b>Rating of Virtual lab in explaining the concepts ?
<br>
<input type="radio" name="rate4" value"5">5
<br>
<input type="radio" name="rate4" value"4">4
<br>
<input type="radio" name="rate4" value"3">3
<br>
<input type="radio" name="rate4" value"2">2
<br>
<input type="radio" name="rate4" value"1">1
<br><br>
<input type="submit" value="Submit">
<br><br>


</form>
</body>
</html>
';

$intro10 = mysql_real_escape_string($intro10);
$obj10 = mysql_real_escape_string($obj10);
$manual10 = mysql_real_escape_string($manual10);
$procedure10 = mysql_real_escape_string($procedure10);
$virExp10 = mysql_real_escape_string($virExp10);
$theory10 = mysql_real_escape_string($theory10);
$quiz10 = mysql_real_escape_string($quiz10);
$ref10 = mysql_real_escape_string($ref10);
$feedback10 = mysql_real_escape_string($feedback10);





// third experiment

$intro3 = '
<p style="font-family:serif;font-size:17px;color:green">
<br /><i><u>Boundary Conditions</u></i><br /><br />
<p style="font-family:serif;font-size:17px">

Till now we have considered the existence of Electric field in a homogeneous medium. If the field exists in a region consisting of two different media, the conditions that the field must satisfy at the interface separating the media are called "Boundary conditions". <br/>
These conditions are helpful in determining the field on one side of boundary conditions if the field on the other side is known.<br />

       <p align="center"> <img  src="intro_image.jpg" width="500" height="330" /></p>
        </p>

<i><p align="center" style="color:green;font-size:17p;font-size:17px">The following video may help you to better understand the concept of Boundary Conditions.</p></i>
<br />
<!--
<p align="center" style="border-style:groove border-color:98bf21;padding:3px">
<object id="MediaPlayer" width=600 height=400 classid="CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95" standby="Loading Windows Media Player components..." type="application/x-oleobject" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112">

<param name="filename" value="33.wmv">
<param name="Showcontrols" value="True">
<param name="autoStart" value="False">


<embed type="application/x-mplayer2" src="1.wmv" name="MediaPlayer" width=600 height=400></embed>
</object> -->


<p align="center" style="border-style:groove border-color:98bf21;padding:3px">
<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/y_Z3BBJ_p_0?fs=1&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/y_Z3BBJ_p_0?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
</p>
';


$obj3 = '

<p style="font-family:serif;font-size:17px;color:green">
<i>The main objectives of this experiment are the following:</i>
</p>
<br>
<br>
<p style="font-family:serif;font-size:17px">
To Determine change in Electric field and Flux density and refracted angle when a wave travels from one medium to other which have  relative dielectric constant &epsilon;r<sub>1</sub> and relative dielectric constant &epsilon;r<sub>2</sub>
        </p>';

$manual3 = '
<p style="font-family:serif;font-size:17px">
Please note the following things from the video:<br /><br />
1. how to <b style="color:green">start</b> experiment <br>
2. how to move on to <b style="color:green">next</b> stage of experiment<br />
3. where to see the output values <br />
4. what are the main concepts in the experiment (shown in the yellow colored text boxes)<br /><br />
Use the video controls to <b>pause</b> the video, <b>replay</b> the video, etc.<br />
<br />
<a href="manual3.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial</li></ul></u></i></a>
</p>

';


$procedure3 = '<p style="font-family:serif;font-size:17px">
In this experiment, we will determine the field on one side of boundary conditions if field on the other side is known. The experiment was designed in a way, so that you can quickly change the parameters and observe the results. This makes you to have a more clear picture of the concepts. <br />
<br />
Start the experiment by pressing the <i style="color:green">start</i> button at the top of the window.<br /><br />
<ol>
<li> <p style="font-family:serif;font-size:17px"> Now click on the screen using mouse. You will observe a red colored ray starting from the point and directs towards the origin. After crossing the boundary the ray may diverge from its path with green color.
This ray is nothing but the electric field line. The divergence of the ray is due to change in the medium at the boundary.<br /></li>
<li> <p style="font-family:serif;font-size:17px">
Now, your task is to experiment with all possible dielectrics.
So, you have two sliders provided at the bottom of the window. These two stands for the dielectrics. Measure the refraction angle and refracted electric field and electric flux density.
Notice that if both regions have same dielectric, the ray will not be diverged from its path.</p></li>
</ol>
';


$virExp3 = '
<p style="font-family:serif;font-size:17px">

<b><u style="color:#B0171F;">Pre-Quiz Questions</u>:</b></br></br></p>
<p style="font-family:serif;font-size:17px">
Test your Understanding on Boundary Conditions, by going through the following quiz:<br />
&nbsp;&nbsp;<a href="preQuiz3.php" target="_blank"><i style="color:green"><u><ul><li>Start the Quiz</li></ul></u></i></a>
</p><br /><br />
<p style="font-family:serif;font-size:17px">
<b><u style="color:#B0171F">Virtual Experiment</u>:</b><br />
Please make sure that you are going to perform experiment only after going through the following sections:<br /><br />
1. Video Tutorial<br />
2. Procedure<br />
3. Objectives<br />
</p>
 <a href="ve_exp3.html"
onclick="window.open(\'ve_exp3.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;"><br />
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment</li></ul></u></i> 
 </p></a> 
<!-- <object codetype="application/java" classid="java:crc.emt.demos.BoundaryConditions$MyApplet.class"  width="900" height="660" title="Boundary Conditions">
</object> -->

';

$theory3 = '
<p style="font-family:serif;font-size:17px">

To determine boundary conditions <b style="color:green">Maxwell\'s equations</b> will be used:<br><br>
&#8750<b>E</b>.d<b>l</b> = 0 <br>
&#8750<b>D</b>.d<b>S</b> = Q<sub>enclosed</sub> <br><br>
<b>E</b> is the Electric field <br>
<b>D</b> is Electric flux density. 
<br><br>

Now decompose the electric field intensity <b>E</b> into two orthogonal components:<br>
<b>E</b> = <b>E</b><sub>t</sub> + <b>E</b><sub>n</sub>
<br>
<b>E</b><sub>t</sub> is tangential component of Electric field
<br> <b>E</b><sub>n</sub> is normal component of Electric field.
<br><br>
Similarly,
<br><b>D</b> = <b>D</b><sub>t</sub> + <b>D</b><sub>n</sub> 
<br>
<b>D</b><sub>t</sub> is the tangential component of Electric field intensity 
<br> <b>D</b><sub>n</sub> is the normal component of Electric field intensity.
<br><br>
Now let us move to 2 types of boundary conditions: <br>
1) Dielectric - Dielectric boundary conditions. <br>
2) Dielectric - Conductor boundary conditions. <br>

<br><br>
        <i><u><b style="color:green">Dielectric - Dielectric boundary conditions</b></u></i>
        <br><br>
Consider the <b>E</b> field existing in a region of two different dielectric characterized by &epsilon;<sub>1</sub> = &epsilon;<sub>0</sub>&epsilon;<sub>r1</sub> and &epsilon;<sub>2</sub> = &epsilon;<sub>0</sub>&epsilon;<sub>r2</sub>. <br><br>
<img src="exp4_theory1.jpg" alt="" width="500" height="180" align="middle">
<br>
<b>E</b><sub>1</sub> = <b>E</b><sub>1t</sub> + <b>E</b><sub>1n</sub><br>
<b>E</b><sub>2</sub> = <b>E</b><sub>2t</sub> + <b>E</b><sub>2n</sub> <br>
<br>
Now the equation<br>
 &#8750<b>E</b>.d<b>l</b> = 0 <br>
is applied for a closed path <i>abcda</i> assuming the path is very small with respect to variation in <b>E</b>.<br>
<br>
<b>E</b><sub>1t</sub>&#9651w -<b>E</b><sub>1n</sub>&#9651h/2 - <b>E</b><sub>2n</sub>&#9651h/2 - <b>E</b><sub>2t</sub>&#9651w + <b>E</b><sub>2n</sub>&#9651h/2 + <b>E</b><sub>1n</sub>&#9651h/2 <br>
E<sub>t</sub> = |E<sub>t</sub>|<br>
E<sub>n</sub> = |E<sub>n</sub>|. <br>
As, &#9651h-->0 <br>
So, <b>E</b><sub>1t</sub> = <b>E</b><sub>2t</sub> <br><br>
Thus, the tangential components of <b>E</b> are on the two sides of the boundary. In other words, <b>E</b><sub>t</sub> undergoes no changes and so continuous through the boundary.<br><br>

And since <b>D</b> = &epsilon;<b>E</b> = <b>D</b><sub>t</sub> + <b>D</b><sub>n</sub>.<br> So, 
<br>
<b>D</b><sub>1t</sub>/&epsilon;<sub>1</sub> = <b>D</b><sub>2t</sub>/&epsilon;<sub>2</sub> <br>
Hence <b>D</b><sub>t</sub> remains discontinuous across the interface.  
<br><br>
Now continuity of normal component across the interface will be checked.<br>
<br> 
<br>
<img src="exp4_theory.jpg" alt="" width="350" height="150" align="middle">
<br><br><br>
From the figure we can see a cylindrical Gaussian surface  <br>
&#9651h-->0 gives <br>
&#9651Q = &rho;<sub>s</sub>&#9651<b>S</b> = D<sub>1n</sub>&#9651<b>S</b>  - D<sub>2n</sub>&#9651<b>S</b>.<br>
Hence,<br> D<sub>1n</sub> - D<sub>2n</sub> = &rho;<sub>s</sub> <br>
 &rho;<sub>s</sub> is the free charge density placed deliberately at the boundary.<br> <b>D</b> is directed from region 2 to region 1.<br>
 If no free charges exists at the interface then &rho;<sub>s</sub> =0.
<br>
So,<br> D<sub>1n</sub> = D<sub>2n</sub>
<br><br>

Thus the normal component of <b>D</b> is continuous across the interface; that is <b>D</b> undergoes no change at the boundary. Since <b>D</b> = &epsilon; <b>E</b> so <br><br>
&epsilon;<sub>1</sub>E<sub>1n</sub> = &epsilon;<sub>2</sub>E<sub>2n</sub> <br><br>
Hence showing normal component of <b>E</b> is discontinuous at the boundary.Thus <br>
<br>1) <b>E</b><sub>1t</sub> = <b>E</b><sub>2t</sub> <br>
<br>2) D<sub>1n</sub> - D<sub>2n</sub> = &rho;<sub>s</sub> <br>
<br>3) &epsilon;<sub>1</sub>E<sub>1n</sub> = &epsilon;<sub>2</sub>E<sub>2n</sub> <br><br>
are collectively called the boundary conditions. <br> 
<br><br>
<i><u><b style="color:green">Conductor - Dielectric boundary conditions </b></u></i>
<br><br>
<img src="f_s.jpg" alt="" width="400" height="160" align="middle">
<br><br>
The conductor is assumed to be perfect. So, <br> 
<b>E</b> = 0, inside the conductor surface.<br>
Similar procedures are applied, which 
were applied for Dielectric - Dielectric interface. <br>
But, the difference is that <br>
<b>E</b> = 0 here <br>
For the path <i>abcda</i>, considering &#9651h-->0, it is found that<br>  
<b>E</b><sub>t</sub> = 0, <br>
<b>D</b> =0. Hence,<br>
D<sub>n</sub> = &#9651Q/&#9651S = &rho;<sub>s</sub> <br>
D<sub>n</sub> = &rho;<sub>s</sub> <br> </p>';



$quiz3 = '
<html>
<head>
<font size="3">
<title>Quiz on Inverter</title>

<script>


//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
   numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);
   numCorrect += checkQuestionRadio( document.quiz.q6);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");
   highlightCorrectButton("correct6");

   //produce output in textarea.
   document.quiz.output.value +=
     "You got " + numCorrect + " out of 6 questions correct.\n" +
     "The correct answers are highlighted." 

}
</script>
</head>
<body>

<form name="quiz">
<ol>
<li><b>At dielectric-dielectric interfaces which of the following are equal ____.</b><br>
   <input type="radio" name="q1" value="wrong">Tangential component of E field<br>
   <input type="radio" name="q1" value="wrong">Normal component of Electric flux density<br>
   <span id="correct1"><input type="radio" name="q1" value="correct">Both a and b</span><br>
   <input type="radio" name="q1" value="wrong">None<br><br>
</li>
<hr>
<br>
<li><b>At dielectric-conductor field interfaces ___</b><br>
   <input type="radio" name="q2" value="wrong">Tangential component of E field is zero<br>
   <input type="radio" name="q2" value="wrong">Normal component of Electric flux density is equal to surface charge density<br>
   <span id="correct2"><input type="radio" name="q2" value="correct">Both a and b</span><br>
   <input type="radio" name="q2" value="wrong">None<br><br>
</li>
<hr>
<br>
<li><b>For dielectric-dielectric interfaces if E field is incident normal to one interface then the angle E field makes with the normal in the other dielectric is___</b><br>
   <input type="radio" name="q3" value="wrong">90 degrees<br>
   <span id="correct3"><input type="radio" name="q3" value="correct">Zero</span><br>
   <input type="radio" name="q3" value="wrong">Unknown<br>
   <input type="radio" name="q3" value="wrong">Insufficient data<br>
</li>
<hr>
<br>
<li><b>For dielectric-dielectric interfaces  if relative permitivty of dielectric1 is 4 and the other is 2 the ratio of tangentials of  incident to refracted E field is___</b><br>
   <span id="correct4"><input type="radio" name="q4" value="correct">2</span><br>
   <input type="radio" name="q4" value="wrong">1<br>
   <input type="radio" name="q4" value="wrong">3<br>
   <input type="radio" name="q4" value="wrong">4<br>
</li>
<hr>
<br>

<li><b>Relative permitvity of Perfect Conductor is___</b><br>
   <input type="radio" name="q5" value="wrong">One<br>
   <input type="radio" name="q5" value="wrong">Two<br>
   <span id="correct5"><input type="radio" name="q5" value="correct">Infinity</span><br>
   <input type="radio" name="q5" value="wrong">None of the above<br><br>
</li>
<hr>
<br>

<li><b>While evaluating boundary conditions E field is decomposed into how many components___</b><br>
   <input type="radio" name="q6" value="wrong">One<br>
   <span id="correct6"><input type="radio" name="q6" value="correct">Two</span><br>
   <input type="radio" name="q6" value="wrong">Three<br>
   <input type="radio" name="q6" value="wrong">Four<br><br>
</li>
<hr>
<br>
</ol>

<input type="button" onClick="checkQuiz()" value="check quiz">
<hr>
<textarea cols="80" rows="10" name="output"></textarea>
</form>
</font>
</body>


</html>';


$ref3 = '
<ol>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Physics for scientists and Engineers with
Modern Physics," New Jersey: Pearson Prentice Hall, 2009 by <i>Douglas C. Giancoli</i></p>.
</li>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Elements of Electromagnetics,"  New York:
Oxford University Press, 2006 by <i> Mattew.N.O.Sadiku</i></p>
</p>
</li>
 <li> 
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Engineering Electromagnetics," New Delhi:  McGraw Hill, 2006.
by  <i>William H. Hayt, Jr., John A. Buck</i>.  </li>
<br /><br />
</ol>
<p style="font-family:serif;font-size:17px">
<b><i><u>WEB REFERENCES</u></i></b>: <br /><br>
<a href="http://farside.ph.utexas.edu/teaching/em/lectures/node59.html">http://farside.ph.utexas.edu/teaching/em/lectures/node59.html<br></a>
<a href="www.ece.utah.edu/...%20E%20Boundary%20Conditions/L24EH%20combined.doc">www.ece.utah.edu/...%20E%20Boundary%20Conditions/L24EH%20combined.doc<br></a>
<a href="www.ittc.ku.edu/~jstiles/.../Dielectric%20Boundary%20Conditions.pdf">www.ittc.ku.edu/~jstiles/.../Dielectric%20Boundary%20Conditions.pdf<br></a>
</p>
';

$feedback3 = '
<html>
<title></title>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="Author" content="cITe">
<meta name="viewport" content="width=1024">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<title>EMT Virtual Lab</title>
<meta name="omni_page" content="cITe - Index">
<link rel="stylesheet" href="cITe/css/base.css" type="text/css">
<link rel="stylesheet" href="cITe/css/mac.css"  type="text/css">
</head>
<body>
<form>
<h3>Feedback of experiment on Boundary Conditions</h3>
<br><br>
First name:
<input type="text" name="firstname" >
&nbsp;
Last name:
<input type="text" name="lastname" >
<br><br>
Current Year of Study:
<input type="text" name="year">
&nbsp;
Address:
<input type="text" name="address">
<br><br>


<b>1)</b>Rate the material related to the experiment ?
<br>
<input type="radio" name="rate" value"5">5
<br>
<input type="radio" name="rate" value"4">4
<br>
<input type="radio" name="rate" value"3">3
<br>
<input type="radio" name="rate" value"2">2
<br>
<input type="radio" name="rate" value"1">1
<br>
<br><br>
<b>2)</b>Rating of Virtual lab in relation to content and experiment ?
<br>
<input type="radio" name="rate1" value"5">5
<br>
<input type="radio" name="rate1" value"4">4
<br>
<input type="radio" name="rate1" value"3">3
<br>
<input type="radio" name="rate1" value"2">2
<br>
<input type="radio" name="rate1" value"1">1
<br><br>
<b>3)</b>Rating of the Theory in relation to the experiment ?
<br>
<input type="radio" name="rate2" value"5">5
<br>
<input type="radio" name="rate2" value"4">4
<br>
<input type="radio" name="rate2" value"3">3
<br>
<input type="radio" name="rate2" value"2">2
<br>
<input type="radio" name="rate2" value"1">1
<br><br>
<b>4)</b>Rating of the quiz question ?
<br>
<input type="radio" name="rate3" value"5">5
<br>
<input type="radio" name="rate3" value"4">4
<br>
<input type="radio" name="rate3" value"3">3
<br>
<input type="radio" name="rate3" value"2">2
<br>
<input type="radio" name="rate3" value"1">1
<br><br>
<b>5)</b>Rating of Virtual lab in explaining the concepts ?
<br>
<input type="radio" name="rate4" value"5">5
<br>
<input type="radio" name="rate4" value"4">4
<br>
<input type="radio" name="rate4" value"3">3
<br>
<input type="radio" name="rate4" value"2">2
<br>
<input type="radio" name="rate4" value"1">1
<br><br>
<input type="submit" value="Submit">
<br><br>


</form>
</body>
</html>
';


$intro3 = mysql_real_escape_string($intro3);
$obj3 = mysql_real_escape_string($obj3);
$manual3 = mysql_real_escape_string($manual3);
$procedure3 = mysql_real_escape_string($procedure3);
$virExp3 = mysql_real_escape_string($virExp3);
$theory3 = mysql_real_escape_string($theory3);
$quiz3 = mysql_real_escape_string($quiz3);
$ref3 = mysql_real_escape_string($ref3);
$feedback3 = mysql_real_escape_string($feedback3);

$intro5 = '<html><body><br /><p style="font-size:18px; color:green"> Electric Field in Material Space </p> <br />

<p style="font-family:serif;font-size:17px">
Just as electric fields can exist in free space, they can exist in material media. 
Materials are broadly classified in terms of their electrical properties as conductors, semiconductors and insulators. Non-conducting materials are usually referred to as insulators or dielectrics. <br /><br />

A conductor is a material which contains movable electric charges. Metals such as copper aluminium are examples of conductors. In a Conductor the outer electrons of the atoms are loosely bound and free to move through the material. In conductors, the valence electrons are essentially free and strongly repel each other. Any external influence which moves one of them will cause a repulsion of other electrons which propagates through the conductor. <br /><br />

In an insulator the free electric charges are very few in number. Most solid materials are classified as insulators because they offer very large resistance to the flow of electric current. In insulators the outermost electrons are so tightly bound that there is essentially zero electron flow through them with ordinary voltages.<br /><br />

The properties of semiconductors lie in between conductors and insulators.<br /><br />

Here we examine the electric field inside a conductor and an insulator.<br />

</body></html>';

$obj5 = '

<p style="font-family:serif;font-size:17px;color:green">
<i>The main objectives of this experiment are the following:</i><br /><br />
</p>
<ol>
    <li> <p style="font-family:serif;font-size:17px">
To measure the electric field inside a conductor. </p> </li>
    <li> <p style="font-family:serif;font-size:17px">
 To measure the polarization and electric fields at various distances inside a dielectric due to a charge placed at center.</p> </li>
 </ol>
';

$manual5 = '

<p style="font-family:serif;font-size:17px">
Please note the following things from the video:<br /><br />
1. how to <b style="color:green">start</b> experiment <br>
2. how to move on to <b style="color:green">next</b> stage of experiment<br />
3. where to see the output values <br />
4. what are the main concepts in the experiment (shown in the yellow colored text boxes)<br /><br />
Use the video controls to <b>pause</b> the video, <b>replay</b> the video, etc.<br />
<br />
<a href="manual4.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial</li></ul></u></i></a>
</p>
';

$procedure5 = '
<p style="font-family:serif;font-size:17px">

This experiment consists of two stages and each stage will teach you a new concept.<br /><br />

The experiment was designed in a way, so that you can quickly change the parameters and observe the results. This makes you to have a more clear picture of the concepts.
<br />
Start the experiment by pressing <i style="color:green">start</i> button<br /><br />

<ul>
<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 1</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li> <p style="font-family:serif;font-size:17px">This stage deals with electric field inside a conductor. You can observe the electric field at point by using mouse clicks. </li>
<li> <p style="font-family:serif;font-size:17px">You can vary external electric field by using slider provided at the bottom of the window  and observe the change in the electric field inside the conductor.</li>

<li> <p style="font-family:serif;font-size:17px">To move on to next stage press next button on the top of window.</li>
</ol>
<br />
</p>
</li>

<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 2</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li> <p style="font-family:serif;font-size:17px">Remember that as electric fields can exist in free space, they can exist in material media.</li>
<li> <p style="font-family:serif;font-size:17px"> Now, we deal with electric field inside a insulator. Note that in an insulator the free electric charges are very few in number. </li>
<li> <p style="font-family:serif;font-size:17px">Measure  the electric field inside and outside the dielectric by varying the parameters charge, radius, and relative permittivity. </li>
</ol>
</p>
</ul>
</p>

';



$virExp5 = '

<p style="font-family:serif;font-size:17px">

<b><u style="color:#B0171F;">Pre-Quiz Questions</u>:</b></br></br></p>
<p style="font-family:serif;font-size:17px">
Test your Understanding on Electric Field in Material Space, by going through the following quiz:<br />
&nbsp;&nbsp;<a href="preQuiz5.php" target="_blank"><i style="color:green"><u><ul><li>Start the Quiz</li></ul></u></i></a>
</p><br /><br />
<p style="font-family:serif;font-size:17px">
<b><u style="color:#B0171F">Virtual Experiment</u>:</b><br />
Please make sure that you are going to perform experiment only after going through the following sections:<br /><br />
1. Video Tutorial<br />
2. Procedure<br />
3. Objectives<br />
</p>
 <a href="ve_exp5.html"
onclick="window.open(\'ve_exp5.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;"><br />
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment</li></ul></u></i> 
 </p></a>
<!-- <object codetype="application/java" classid="java:crc.emt.demos.CoulombsLaw$MyApplet.class"  width="900" height="660" title="Electric field">
</object> -->
';

$theory5 = '
<p style="font-family:serif;font-size:17px">

<b><u><i style="color:green">1. Conductors</i></u></b><br><br>

A conductor has abundant free charges to move. When an external electric field E is applied to an isolated conductor, the positive free charges move in the direction of the applied field, while the negative free charges move in the opposite direction. These charges get accumulated on the surface of the conductor and set up an internal field E<sub>induced</sub> which is equal and opposite in direction to the applied external E field. Thus net field in the conductor is zero.<br /><br />

<img src="images/materialspace/1.jpg" alt=""><br />
<img src="images/materialspace/2.png" alt=""><br />

<br />
E<sub>net</sub> = E + E<sub>induced</sub>= 0. <br />

Applying Gauss\' law inside the conductor, as electric field is zero that implies there is no net charge inside the conductor. <br />

Inside the conductor, the electric field and the volume density of charge are zero, i.e. The charge remains only on the outer surface of a conductor.<br />
<br />
<img src="images/materialspace/3.png" alt=""><br />

E=0 hence &rho;, where  &rho; is  charge density. The above equation is first of the Maxwell\'s four equations, in differential form. <br />

As you know that electric potential is the amount of work done in moving the unit charge from point A to point B in an electric field, the potential required in moving a charge inside the conductor  is zero as the electric field inside it is zero.  <br />

<img src="images/materialspace/4.png" alt=""><br />
Hence we can consider that a conductor is equipotential body which means that potential is same everywhere in the conductor.<br /><br /><br />

<b><u><i style="color:green">2. Dielectrics and Polarization</i></u></b><br><br>

Now you know that dielectric contains very few free electrons. The electrons are bound by the forces within the material. When a dielectric is placed in electric field although the charges cannot move freely they tend to displace from their original path. <br />
<br />
<img src="images/materialspace/5.jpg" alt=""><br />

The above picture depicts that, at atom level, when electric field is applied the electrons tend to spend more time away from the electric field, thereby we would observe a dipole like behaviour of the atom. This is called as polarization and the atoms acquire an electric dipole moment.<br />

If  molecules of the dielectric are polar in nature then the polarization effect would be significant. <br />
<br />
<img src="images/materialspace/6.png" alt=""><br />

As shown if the above figure as molecules act like dipoles their dipole moment is defined as charge times the distance vector seperating the positive and negative charges. <br /><br />

<img src="images/materialspace/7.jpg" alt=""><br />

<img src="images/materialspace/8.png" alt=""><br />

Polarization is defined as the dipole moment per unit volume of the dielectric:<br /><br />

<img src="images/materialspace/9.jpg" alt=""><br />

When a dielectric is placed in electric field a surface charge density equivalent to volume charge, that is created due to polarization of dielectric, is formed. Both charge densities are such that they cancel each other and hence dielectric remains neutral. <br />

Polarization of dielectric is proportional to the applied electric field and is given by <br /><br />

<img src="images/materialspace/10.jpg" alt=""><br />

where &epsilon;<sub>0</sub> is the permittivity of free space, and χe is the electric susceptibility of the medium. Dielectric constant or relative permittivity &epsilon;<sub>r</sub>  of a material is defined as <br /><br />

<img src="images/materialspace/11.png" alt=""><br />

where &epsilon; is the permittivity of the dielectric and &epsilon;<sub>0</sub> is the permittivity of free space. <br /><br />

If a free charge is placed in a dielectric  region then the elecrtic flux density would increase by the amount of Polarization and is given by:<br /><br />

D = &epsilon;<sub>o</sub>;E + P = &epsilon;E
<br /><br />
Dielectric materials are placed in between capacitor plates to increase the capacitance.

</p>
';

$quiz5 = '
<html>
<head>
<font size="3">
<title>Quiz on Material Space</title>

<script>


//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);
   numCorrect += checkQuestionRadio( document.quiz.q6);
   numCorrect += checkQuestionRadio( document.quiz.q7);
   numCorrect += checkQuestionRadio( document.quiz.q8);
   numCorrect += checkQuestionRadio( document.quiz.q9);
   numCorrect += checkQuestionRadio( document.quiz.q10);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");
   highlightCorrectButton("correct6");
   highlightCorrectButton("correct7");
   highlightCorrectButton("correct8");
   highlightCorrectButton("correct9");
   highlightCorrectButton("correct10");

   //produce output in textarea.
   document.quiz.output.value +=
     "You got " + numCorrect + " out of 10 questions correct.\n" +
     "The correct answers are highlighted." 
}
</script>
</head>
<body>

<form name="quiz">
<ol>
<li><b>Electric Potential inside the perfect spherical conductor is ____________ proportional to the distance from the centre.</b><br>
   <input type="radio" name="q1" value="wrong"> Directly <br>
<input type="radio" name="q1" value="wrong"> Inversely<br>
   <input type="radio" name="q1" value="wrong"> Square of Inverse <br>
   <span id="correct1"><input type="radio" name="q1" value="correct"> Constant</span><br>
   
</li><br />
<hr><br />

<li><b>The electric field intensity in a dielectric (&epsilon;<sub>r</sub>  = 2) filling the space between the plates
of a parallel-plate capacitor is 10 kV/m. The distance between the plates of the capacitor  is 25 mm. The surface charge density of free charge on the plates is :</b><br>
   <span id="correct2"><input type="radio" name="q2" value="correct"> 176.8 nC/m<sup>2</sup></span><br>
   <input type="radio" name="q2" value="wrong"> 225.5 nC/m<sup>2</sup><br>
   <input type="radio" name="q2" value="wrong"> 442.0 nC/m<sup>2</sup><br>
   <input type="radio" name="q2" value="wrong"> 70.70 nC/m<sup>2</sup><br>
</li><br />
<hr><br />

<li><b>The electric field intensity in a dielectric (&epsilon;<sub>r</sub> = 2) filling the space between the plates
of a parallel-plate capacitor is 10 kV/m. The distance between the plates of the capacitor  is 1 mm. The polarization (in coulombs/meter square) is :</b><br>
   <input type="radio" name="q3" value="wrong"> 100  nC/m<sup>2</sup><br>
   <input type="radio" name="q3" value="wrong"> 124.5 nC/m<sup>2</sup><br>
   <span id="correct3"><input type="radio" name="q3" value="correct"> 88.4 nC/m<sup>2</sup></span><br>
   <input type="radio" name="q3" value="wrong"> 256 nC/m<sup>2</sup><br>
</li><br />
<hr><br />

<li><b>A point charge Q is placed at the centre of the dielectric hollow sphere (&epsilon;  = &epsilon;<sub>r</sub>&epsilon;<sub>o</sub>). Inner sphere radius is a cm and outer  sphere radius is b cm. The polarization P for r is : <br />
 i) a>r>0<br />
 ii) r>b</b><br>
   <input type="radio" name="q4" value="wrong"> i->zero, ii -> non zero<br>
   <input type="radio" name="q4" value="wrong"> i-> non zero, ii-> zero<br>
   <span id="correct4"><input type="radio" name="q4" value="correct"> Zero in both cases</span><br>
   <input type="radio" name="q4" value="wrong"> Non zero in both cases<br>
</li><br />
<hr><br />

<li><b>The unit of polarization is </b><br>
   <input type="radio" name="q5" value="wrong"> nC/m<br>
   <span id="correct5"><input type="radio" name="q5" value="correct"> nC/m<sup>2</sup></span><br>
 <input type="radio" name="q5" value="wrong"> nC/m<sup>3</sup><br>
   <input type="radio" name="q5" value="wrong"> nCm<sup>2</sup><br>
</li><br />
<hr><br />

<li><b>For a dielectric with the relative permittivity (&epsilon;<sub>r</sub>=2). Electric susceptibility is :</b><br>
   <input type="radio" name="q6" value="wrong"> 3<br>
   <span id="correct6"><input type="radio" name="q6" value="correct"> 1</span><br>
   <input type="radio" name="q6" value="wrong"> 2<br>
   <input type="radio" name="q6" value="wrong"> Data Insufficient<br>
</li><br />
<hr><br />

<li><b>Dielectric breakdown is said to occurred when:</b><br>
   <input type="radio" name="q7" value="wrong"> Dielectric has broken down due to excessive voltage <br>
   <span id="correct7"><input type="radio" name="q7" value="correct"> Dielectric starts conducting </span><br>
   <input type="radio" name="q7" value="wrong"> Dielectric stops conducting<br>
   <input type="radio" name="q7" value="wrong"> None of these<br>
</li><br />
<hr><br />

<li><b> when the ratio of electric field to polarization is divided by &epsilon;<sub>o</sub>. It is called as </b><br>
   <input type="radio" name="q8" value="wrong"> Relative permittivity <br>
   <input type="radio" name="q8" value="wrong"> Dielectric strength <br>
   <span id="correct8"><input type="radio" name="q8" value="correct"> Electric susceptibility</span><br>
   <input type="radio" name="q8" value="wrong"> None of the above<br>
</li><br />
<hr><br />

<li><b>If &epsilon; does not changes with applied electric field, then the dielectric material is :</b><br>
   <span id="correct9"><input type="radio" name="q9" value="correct"> Linear</span><br>
   <input type="radio" name="q9" value="wrong"> Homogenous <br>
<input type="radio" name="q9" value="wrong"> Isotropic <br>
   <input type="radio" name="q9" value="wrong"> None of the above <br>
                                              </li><br />
<hr><br />
<li><b> If &epsilon; does not changes with direction, then the dielectric material is :</b><br>
<input type="radio" name="q10" value="wrong"> Linear <br>
   <input type="radio" name="q10" value="wrong"> Homogenous <br>
   <span id="correct10"><input type="radio" name="q10" value="correct"> Isotropic</span><br>
   <input type="radio" name="q10" value="wrong"> None of the above <br>
</li><br />
<hr><br />

</ol>

<input type="button" onClick="checkQuiz()" value="check quiz">
<hr>
<textarea cols="80" rows="10" name="output"></textarea>
</form>
</font>
</body>


</html>';


$ref5 = '
<ol>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Physics for scientists and Engineers with
Modern Physics," New Jersey: Pearson Prentice Hall, 2009 by <i>Douglas C. Giancoli</i></p>.
</li>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Elements of Electromagnetics,"  New York:
Oxford University Press, 2006 by <i> Mattew.N.O.Sadiku</i></p>
</p>
</li>
 <li> 
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Engineering Electromagnetics," New Delhi:  McGraw Hill, 2006.
by  <i>William H. Hayt, Jr., John A. Buck</i>.  </li>
<br /><br />
</ol>
';

$feedback5 = '<html><body><br /><br /><br /><br /><p style="color:green"> <p style="font-size:16px"> <p style="font-size:16px; color:green"> To be Updated soon ...    <br /></body></html>';
 
$intro5 = mysql_real_escape_string($intro5);
$obj5 = mysql_real_escape_string($obj5);
$manual5 = mysql_real_escape_string($manual5);
$procedure5 = mysql_real_escape_string($procedure5);
$virExp5 = mysql_real_escape_string($virExp5);
$theory5 = mysql_real_escape_string($theory5);
$quiz5 = mysql_real_escape_string($quiz5);
$ref5 = mysql_real_escape_string($ref5);
$feedback5 = mysql_real_escape_string($feedback5);


$intro6 = '<html><body><br /><p style="font-size:18px; color:green"> Application of Faraday\'s Laws</p> <br />

<p style="font-family:serif;font-size:17px">

Till now we have seen static magnetic fields. We found that various current distributions(moving charge) produces magnetic fields. It was of great interest to the scientists to find out if magnetic field would produce current. Joseph Henry and Miachel Faraday independently worked on this and Henry was the first to find that it is possible. But Faraday published his results earlier than Henry hence the Faraday\'s law. <br /><br />

Faraday\'s experimental setup looked like the one shown below.<br />
<br />
<img src="images/faradayslaws/1.jpg" alt=""><br />

He expected to see deflection in the galvanometer when switch is closed as he anticipated that the magnetic flux created by the first coil induces current in the later one but he did not observe any deflection. Accidentally (Most of the discoveries are accidental !!!) he observed that the closing and opening of the switch caused deflection in the galvanometer. <br /><br />

Here we see how magnetic field can be used to generate electric field and its applications.
<br /><br /><br />
<i><p align="center" style="color:green;font-size:17p;font-size:17px">The following videos may help you to better understand how the magnetic fields are generated. </p></i>
<br />
<p align="center" style="border-style:groove border-color:98bf21;padding:3px">

<iframe title="YouTube video player" width="640" height="390" src="http://www.youtube.com/embed/hajIIGHPeuU" frameborder="0" allowfullscreen></iframe>

</p>
</body></html>';

$obj6 = '

<p style="font-family:serif;font-size:17px;color:green">
<i>The main objectives of this experiment are the following:</i><br /><br />
</p>
<ol>
    <li> <p style="font-family:serif;font-size:17px">
 To calculate the magnetic field at a point in space due to finite line current.  </p> </li>
    <li> <p style="font-family:serif;font-size:17px">
 To calculate  the magnetic field at a point in space due to infinite line current</p></li>
    <li> <p style="font-family:serif;font-size:17px">
 To calculate magnetic field due to a infinite current sheet. </p></li>
    <li> <p style="font-family:serif;font-size:17px">
To calculate magnetic field due to two parallel infinite current sheets. </p></li>

 </ol>
';


$manual6 = '

<p style="font-family:serif;font-size:17px">
Please note the following things from the video:<br /><br />
1. how to <b style="color:green">start</b> experiment <br>
2. how to move on to <b style="color:green">next</b> stage of experiment<br />
3. where to see the output values <br />
4. what are the main concepts in the experiment (shown in the yellow colored text boxes)<br /><br />
Use the video controls to <b>pause</b> the video, <b>replay</b> the video, etc.<br />
<br />
<a href="manual5.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial</li></ul></u></i></a>
</p>
';


$procedure6 = '
<p style="font-family:serif;font-size:17px">

This experiment consists of three stages and each stage will teach you a new concept.<br /><br />

The experiment was designed in a way, so that you can quickly change the parameters and observe the results. This makes you to have a more clear picture of the concepts.
<br /><br />
Start the experiment by pressing <i style="color:green">start</i> button<br /><br />

<ul>
<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 1</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">

Want to learn more other than static magnetic fields !!! We show you the interesting (and most basic) concept of Faraday\'s laws.
<ol>
<li> <p style="font-family:serif;font-size:17px">Observe a magnetic bar(moving) which is at the center of a rectangular coil. Set the frequency and the magnetic flux of magnetic bar.</li>
<li> <p style="font-family:serif;font-size:17px">You can observe the amplitude (i.e., maximum value) of voltage (a sinusoidal wave) on the voltameter.</li>
<li> <p style="font-family:serif;font-size:17px">By changing the parameters, see the graph (run time graph) on the rightside of window. Write a report of your observations.</li>
</ol><br />
<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 2</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li> <p style="font-family:serif;font-size:17px">Now, we generate the voltage by rotating the rectangular plate. (B is constant) You can increase or decrease the rate of rotation of rectangular coil.</li>
<li> <p style="font-family:serif;font-size:17px">So, as the area (intersected with B) changes, voltage is produced. The amplitude of voltage is displayed in the voltameter.</li>
<li> <p style="font-family:serif;font-size:17px">See the exact nature of voltage (sinusoidal) on the graph(run time graph) provided at the rightside of window.</li>
</ol>
</p>
</li><br />

<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 3</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li> <p style="font-family:serif;font-size:17px">Let us do the opposite of what we have done in the above. So, we see the functioning of motor in this stage. That means, we rotate the rectangular coil, by giving voltage as input. </li>
<li> <p style="font-family:serif;font-size:17px">Measure how voltage is related to frequency of rotation of rectangular coil. Plot a graph and compare with given graph.</li>
</ol>
</p>
</li>

';

$virExp6 = '

<p style="font-family:serif;font-size:17px">

<b><u style="color:#B0171F;">Pre-Quiz Questions</u>:</b></br></br></p>
<p style="font-family:serif;font-size:17px">
Test your Understanding on Faraday\'s Laws, by going through the following quiz:<br />
&nbsp;&nbsp;<a href="preQuiz6.php" target="_blank"><i style="color:green"><u><ul><li>Start the Quiz</li></ul></u></i></a>
</p><br /><br />
<p style="font-family:serif;font-size:17px">
<b><u style="color:#B0171F">Virtual Experiment</u>:</b><br />
Please make sure that you are going to perform experiment only after going through the following sections:<br /><br />
1. Video Tutorial<br />
2. Procedure<br />
3. Objectives<br />
</p>
 <a href="ve_exp6.html"
onclick="window.open(\'ve_exp6.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;"><br />
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment</li></ul></u></i> 
 </p></a>
<!-- <object codetype="application/java" classid="java:crc.emt.demos.CoulombsLaw$MyApplet.class"  width="900" height="660" title="Electric field">
</object> -->
';
$theory6 = '
<p style="font-family:serif;font-size:17px">
Faraday concluded from his experiment that the changing magnetic field induces current. He formulated the experimental result as follows:<br /><br />

<i>The induced electromotive force (EMF) in any closed circuit is equal to the time rate of change of the magnetic flux through the circuit. </i><br /><br />

The above law is known as Faraday\'s law of induction. <br /><br />

Let us first see what magnetic flux means:<br /><br />

Magnetic flux (most often denoted as &phi;<sub>m</sub>), is a measure of the amount of magnetic field passing through a given surface. The magnetic flux through a given surface is proportional to the number of (imaginary) magnetic field lines that pass through the surface. 
The magnetic flux for a uniform B (magnetic field) at any angle to a surface is defined by a dot product of the magnetic field and the area element vector.<br /> 
<br />
<img src="images/faradayslaws/2.png" alt=""><br />
<img src="images/faradayslaws/3.jpg" alt=""><br />

Magnetic flux equation in integral form:<br /><br />

<img src="images/faradayslaws/4.png" alt=""><br />

 Coming back to Faraday\'s law which states that the EMF generated in a circuit is proportional to the rate of change of the magnetic flux through the circuit. <br />
<br />

<img src="images/faradayslaws/5.png" alt=""><br />
The figure depicts that a moving magnet through a electric coil induces current.<br />

<img src="images/faradayslaws/6.jpg" alt=""><br />

If the circuit contains closely wrapped coils as shown above such that same amount of magnetic flux passes through all of the coils then, if the number of turns of the coil are N, EMF induced would be given by:<br />
<br />
<img src="images/faradayslaws/7.jpg" alt=""><br />
From the above formula we can conclude that the more EMF could be generated by:<br /><br />
1.Increasing the number of turns of the coil<br />
2.increasing the rate of change of flux which can be done by either increasing the rate of change of magnetic field and increasing the magnetic field or increasing the rate of change of area and increasing the area exposed to the magnetic field.<br />
<br />
In this context it is important to know about the Lenz law. It states that <br /><br />
 <i>" the  induced current is always in such a direction as to oppose the motion or change causing it ".</i>
<br /><br /><br />

<img src="images/faradayslaws/8.jpg" alt=""><br />
This law determines the direction of induced EMF and hence we have a negative sign in the equations.<br /><br />
<br />
<b><u><i style="color:green">Generator</i></u></b><br><br>

Electrical generator converts mechanical energy into electrical energy. It works on Faraday\'s law of induction.

<img src="images/faradayslaws/9.jpg" alt="">
Hand Moving Generator

<img src="images/faradayslaws/10.jpg" alt=""><br />
<br />
Suppose a conducting loop as shown above is made to rotate in a magnetic field B with angular velocity &omega; and assuming that the loop has an area A then from the farday\' law of induction we have<br />


<img src="images/faradayslaws/11.png" alt=""><br />
Since  &omega; is proportional to rate of change of &theta; we have:<br />

<img src="images/faradayslaws/12.png" alt=""><br />

If the coil has N turns then:<br />

<img src="images/faradayslaws/13.png" alt=""><br />

The loop cuts the static magnetic flux created by the magnetic poles as it rotates, hence the there is change in the flux through the coil and hence EMF is produced.<br /><br />
<br />
<b><u><i style="color:green">Motor</i></u></b><br><br>

It has been observed that magnetic field exerts force on moving charges and it is given by:<br /><br />
<img src="images/faradayslaws/14.png" alt=""><br />

Similarly magnetic field also exerts force on a current carrying conductor (find out how?) and is given by<br /><br />

<img src="images/faradayslaws/15.png" alt=""><br />
<img src="images/faradayslaws/16.png" alt=""><br />
Motor works as follows:<br />
<br />
<img src="images/faradayslaws/17.jpg" alt=""><br />
When a dc current carrying loop is placed in a magnetic field the sides of loop which are perpedicular to the magnetic field experience forces which are equal and opposite in direction. As we know this produce a torque on the loop which is given by <br /><br />

&tau; = ILBsin&theta; * w = IBAsin&theta;.<br /><br />

This torque results in rotational moment of the loop.<br /><br />

If the direction of flow of current would remain the same till the loop reaches vertical position(from the angle shown in figure) and moves beyond the forces would act in reverse direction and the loop would reverse the direction. To avoid this dc motor employs commutator and brushes.<br />
<br />
<br />
<b><u><i style="color:green">Back EMF</i></u></b><br><br>

One might assume that the loop would continue to move with infinite angular speed ( if you did not assume refresh the concepts of torque). There is something called back EMF which comes into play.<br /> <br />
Again Faraday\'s law helps us here. As the loop is moving in the magnetic field an EMF would be induced to oppose the cause. Thus it is opposite in direction to the applied EMF(Lenz\'s law).  This is called BACK EMF. As the angular speed of the loop increases back emf also increases proportionally. The speed of the motor is restricted by this. Back EMF is both a boon and bane.<br />
<br />
Now as part of your exercise find out how. <br />

</p>
';

$ref6 = '
<ol>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Physics for scientists and Engineers with
Modern Physics," New Jersey: Pearson Prentice Hall, 2009 by <i>Douglas C. Giancoli</i></p>.
</li>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Elements of Electromagnetics,"  New York:
Oxford University Press, 2006 by <i> Mattew.N.O.Sadiku</i></p>
</p>
</li>
 <li> 
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Engineering Electromagnetics," New Delhi:  McGraw Hill, 2006.
by  <i>William H. Hayt, Jr., John A. Buck</i>.  </li>
<br /><br />
</ol>
<b><i><u>WEB REFERENCES</u></i></b>: <br /><br>
<a href="http://www.ncert.nic.in/html/learning_basket/electricity/electricity/machine/motor.htm">http://www.ncert.nic.in/html/learning_basket/electricity/electricity/machine/motor.htm<br></a>
<a href="http://en.wikipedia.org/wiki/Faraday%27s_law_of_induction">http://en.wikipedia.org/wiki/Faraday%27s_law_of_induction<br></a>
</p>
';

$quiz6 = '
<html>
<head>
<font size="3">
<title>Quiz on Applications of Faraday\'s Laws</title>

<script>


//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
   numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);
   numCorrect += checkQuestionRadio( document.quiz.q6);
   numCorrect += checkQuestionRadio( document.quiz.q7);
   numCorrect += checkQuestionRadio( document.quiz.q8);
   numCorrect += checkQuestionRadio( document.quiz.q9);
   numCorrect += checkQuestionRadio( document.quiz.q10);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");
   highlightCorrectButton("correct6");
   highlightCorrectButton("correct7");
   highlightCorrectButton("correct8");
   highlightCorrectButton("correct9");
   highlightCorrectButton("correct10");

   //produce output in textarea.
   document.quiz.output.value +=
     "You got " + numCorrect + " out of 10 questions correct.\n" +
     "The correct answers are highlighted." 
}
</script>
</head>
<body>

<form name="quiz">
<ol>
<li><b>A rectangular coil of 100 turns and size 0.1m*0.05m is placed perpendicular to a magnetic field of 0.1T. If the field drops to 0.05T in 0.05s, the magnetic of induced emf is : </b><br>
   <input type="radio" name="q1" value="wrong"> 1V<br>
   <span id="correct1"><input type="radio" name="q1" value="correct"> 0.5V</span><br>
   <input type="radio" name="q1" value="wrong"> 2V<br>
   <input type="radio" name="q1" value="wrong"> 0.1V<br>
   
</li><br />
<hr><br />

<li><b>A magnet is moving towards the coil along its axis and the emf induced in the coil is &epsilon; . If the coil also starts moving towards the magnet with same speed, the induced emf :</b><br>
   <input type="radio" name="q2" value="wrong"> &epsilon; <sup>2</sup><br>
   <input type="radio" name="q2" value="wrong"> &epsilon;<br>
   <span id="correct2"><input type="radio" name="q2" value="correct"> 2&epsilon;</span><br>
   <input type="radio" name="q2" value="wrong"> 3&epsilon;<br>
</li><br />
<hr><br />

<li><b> Direct current Motor convert ________ energy into _______ energy, in which the ________ is produced by the magnetic field on the current carrying wire. </b><br>
   <span id="correct3"><input type="radio" name="q3" value="correct"> Electrical, mechanical, torque</span><br>
   <input type="radio" name="q3" value="wrong"> Mechanical,electrical, force<br>
   <input type="radio" name="q3" value="wrong"> Mechanical, Electrical, torque<br>
   <input type="radio" name="q3" value="wrong"> None of the above<br>
</li><br />
<hr><br />

<li><b>If in a closed circuit, doubling the number of turns and reducing the rate of change of flux by half. The induced emf in the circuit will be ___ times the original</b><br>
   <input type="radio" name="q4" value="wrong"> Half<br>
   <input type="radio" name="q4" value="wrong"> Double<br>
   <span id="correct4"><input type="radio" name="q4" value="correct"> Remains same</span><br>
   <input type="radio" name="q4" value="wrong"> Reduced to one-fourth<br>
</li><br />
<hr><br />

<li><b>If a conducting loop is placed such that normal to vector is perpendicular to magnetic field then the EMF generated in the circuit is </b><br>
   <span id="correct5"><input type="radio" name="q5" value="correct"> Zero</span><br>
   <input type="radio" name="q5" value="wrong"> Depends on the area of the loop<br>
   <input type="radio" name="q5" value="wrong"> Insufficient data<br>
   <input type="radio" name="q5" value="wrong"> None of the above<br>
</li><br />
<hr><br />

<li><b>Force exerted by a magnetic field on a current carrying conductor is</b><br>
   <input type="radio" name="q6" value="wrong"> Proportional to magnetic field<br>
   <input type="radio" name="q6" value="wrong"> Proportional to Length of the conductor<br>
   <input type="radio" name="q6" value="wrong"> Proportional to Current<br>
   <span id="correct6"><input type="radio" name="q6" value="correct"> All the above</span><br>
</li><br />
<hr><br />

<li><b>Work done by magnetic field on a moving charged particle is</b><br>
   <input type="radio" name="q7" value="wrong"> depends on speed of charged particle<br>
   <input type="radio" name="q7" value="wrong"> depends on magnetic field<br>
   <span id="correct7"><input type="radio" name="q7" value="correct"> zero</span><br>
   <input type="radio" name="q7" value="wrong"> cannot be determined.<br>
</li><br />
<hr><br />

<li><b>If the bar magnet is moving toward a conducting coil along its axis then _</b><br>
   <span id="correct8"><input type="radio" name="q8" value="correct"> EMF is induced such that it opposes the increasing magnetic field</span><br>
   <input type="radio" name="q8" value="wrong"> EMF is generated in the loop induced such that it aids the increasing magnetic field<br>
<input type="radio" name="q8" value="wrong"> EMF is not generated <br>
   <input type="radio" name="q8" value="wrong"> All the above<br>
</li><br />
<hr><br />

<li><b>A Loop connected to DC supply placed in varying magnetic field with no slip rings
or brushes</b><br>
   <input type="radio" name="q9" value="wrong"> Rotates<br>
   <span id="correct9"><input type="radio" name="q9" value="correct"> Oscillates</span><br>
   <input type="radio" name="q9" value="wrong"> Do not move<br>
   <input type="radio" name="q9" value="wrong"> Cannot be determined<br>
</li><br />
<hr><br />


<li><b>EMF can be generated in a loop if</b><br>
   <input type="radio" name="q10" value="wrong"> If a this loop is stationary and placed in varying magnetic field<br>
   <input type="radio" name="q10" value="wrong"> If loop’s area changes with time and is placed in a constant magnetic field<br>
   <input type="radio" name="q10" value="wrong"> If loop oscillates in the magnetic field<br>
   <span id="correct10"><input type="radio" name="q10" value="correct"> All the above</span><br>
</li><br />
<hr><br />
</ol>

<input type="button" onClick="checkQuiz()" value="check quiz">
<hr>
<textarea cols="80" rows="10" name="output"></textarea>
</form>
</font>
</body>


</html>
';

$feedback6 = '<html><body><br /><br /><br /><br /><p style="color:green"> <p style="font-size:16px"> <p style="font-size:16px; color:green"> To be Updated soon ...    <br /></body></html>';


$intro6 = mysql_real_escape_string($intro6);
$obj6 = mysql_real_escape_string($obj6);
$manual6 = mysql_real_escape_string($manual6);
$procedure6 = mysql_real_escape_string($procedure6);
$virExp6 = mysql_real_escape_string($virExp6);
$theory6 = mysql_real_escape_string($theory6);
$quiz6 = mysql_real_escape_string($quiz6);
$ref6 = mysql_real_escape_string($ref6);
$feedback5 = mysql_real_escape_string($feedback5);

$intro4= '<html><body><br /><p style="font-size:18px; color:green"> MagnetoStatic Fields </p> <br />

<p style="font-family:serif;font-size:17px">
We have dealt with electric fields so far. Let us start with the other half of the Electromagnetism.<br /><br />

In the fifth century B.C, the Greeks knew that there are some rocks that attract bits of iron. They are very plentiful in the district of Magnesia, and so that\'s where the name "magnet" and "magnetism" comes from. The rocks contain iron oxide, which we call magnetite.<br /><br />
In 1100 A.D., the Chinese used these needles of magnetite to make compasses, and in the thirteenth century, it was discovered that magnetites have two places of maximum attraction, which we call poles. <br /><br />
Poles always occur in pairs.  Magnetic monopoles do not exist so far. (if you find one you would win a Nobel Prize !!) This is not the case with electricity, we can have electric monopoles.i.e, we can have isolated charges(positive or negative). <br /><br />
We have seen that electric field is the interaction of two or more charges. In the similar way magnetic poles also interact with each other and hence we can figure out magnetic field. <br /><br />

Here we learn how magnetic fields are generated.<br /></p>
<br /><br /><br />
<i><p align="center" style="color:green;font-size:17p;font-size:17px">The following videos may help you to better understand how the magnetic fields are generated. </p></i>
<br />
<p align="center" style="border-style:groove border-color:98bf21;padding:3px">
<iframe title="YouTube video player" width="480" height="390" src="http://www.youtube.com/embed/WUpDMi50zPs" frameborder="0" allowfullscreen></iframe>

<iframe title="YouTube video player" width="480" height="390" src="http://www.youtube.com/embed/6xrUPxWfVvk" frameborder="0" allowfullscreen></iframe>
</p>

</body></html>';

$obj4 = '

<p style="font-family:serif;font-size:17px;color:green">
<i>The main objectives of this experiment is to determine magnetic field intensity at various points due to::</i><br /><br />
</p>
<ol>
    <li> <p style="font-family:serif;font-size:17px">
 To calculate the magnetic field at a point in space due to finite line current. </p></li>
    <li> <p style="font-family:serif;font-size:17px">
 To calculate  the magnetic field at a point in space due to infinite line current </p> </li>
    <li> <p style="font-family:serif;font-size:17px">
 To calculate magnetic field due to a infinite current sheet.</p></li>
    <li> <p style="font-family:serif;font-size:17px">
 To calculate magnetic field due to two parallel infinite current sheets</p></li>
 </ol>
';
$manual4 = '

<p style="font-family:serif;font-size:17px">
Please note the following things from the video:<br /><br />
1. how to <b style="color:green">start</b> experiment <br>
2. how to move on to <b style="color:green">next</b> stage of experiment<br />
3. where to see the output values <br />
4. what are the main concepts in the experiment (shown in the yellow colored text boxes)<br /><br />
Use the video controls to <b>pause</b> the video, <b>replay</b> the video, etc.<br />
<br />
<a href="manual6.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial</li></ul></u></i></a>
</p>
';

$procedure4 = '
<p style="font-family:serif;font-size:17px">

This experiment consists of four stages and each stage will teach you a new concept.<br /><br />

The experiment was designed in a way, so that you can quickly change the parameters and observe the results. This makes you to have a more clear picture of the concepts.
<br />
Start the experiment by pressing <i style="color:green">start</i> button<br /><br />

<ul>
<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 1</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">

<ol>

<li> <p style="font-family:serif;font-size:17px">In stage 1, we will see that magnetic field is generated from the moving electric charges. </li>
<li> <p style="font-family:serif;font-size:17px">Here you can change the parameters current density, coordinate of the point where magnetic field has to be measured, and the length of the wire (remember it is a finite wire) using the sliders provided at the bottom of the window.</li>
<li> <p style="font-family:serif;font-size:17px">After setting parameters, click the button "Run Simulation". You can see the animation of process of calculating magnetic field intensity at a point.</li>
<li> <p style="font-family:serif;font-size:17px">In the experiment only x-coordinate of a point can be changed. Calculate the magnetic field intensity at various paoints(refer the theory section !!!)</li>
<li> <p style="font-family:serif;font-size:17px">Observe the graphs on the right hand side of window. Analyze them and try to make a report of your understanding of the graph. (ofcourse, you can always refer to theory section)</li>
<li> <p style="font-family:serif;font-size:17px">To move on to next stage press next button on the top of window.</li>

</ol><br />

<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 2</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
Now, we show the above process for a infinite current carrying wire.
<ol>
<li> <p style="font-family:serif;font-size:17px">Changing parameters is similar to above (Make a note of about alpha, beta values).</li>
<li> <p style="font-family:serif;font-size:17px">To move on to next stage press next button on the top of window.</li>
</ol><br />

</p>
</li>

<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 3</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">

<ol>
<li> <p style="font-family:serif;font-size:17px">Now, we move on to experiment on infinite current sheet. vary the current density by using the sliders provided at the bottom of the window.</li>
<li> <p style="font-family:serif;font-size:17px">Click on the screen to know direction and magnitude of magnetic field intensity at a particular point (observe the arrows on the gaussian surface (cube like surface)).</li>
<li> <p style="font-family:serif;font-size:17px">Analyze the graphs based on the formula shown in the window.</li>
</ol><br />

<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 4</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">

Now, we show the process of stage 3 for a infinite current charge (Tired ?? last stage !!!)
<ol>
<li> <p style="font-family:serif;font-size:17px">Here, you can better understand the magnetic field intensity. Using mouse, click on the screen and make a report on the following:</li>

<li> <p style="font-family:serif;font-size:17px">By clicking between the infinite current sheets</li>
<li> <p style="font-family:serif;font-size:17px">By clicking outside the infinite current sheets</li>
<li> <p style="font-family:serif;font-size:17px">How would the graph of H vs r look like.</li>

</ol>

</p>
</li>
</ul>';

$virExp4 = '

<p style="font-family:serif;font-size:17px">

<b><u style="color:#B0171F;">Pre-Quiz Questions</u>:</b></br></br></p>
<p style="font-family:serif;font-size:17px">
Test your Understanding on MagnetoStatic Fields, by going through the following quiz:<br />
&nbsp;&nbsp;<a href="preQuiz4.php" target="_blank"><i style="color:green"><u><ul><li>Start the Quiz</li></ul></u></i></a>
</p><br /><br />
<p style="font-family:serif;font-size:17px">
<b><u style="color:#B0171F">Virtual Experiment</u>:</b><br />
Please make sure that you are going to perform experiment only after going through the following sections:<br /><br />
1. Video Tutorial<br />
2. Procedure<br />
3. Objectives<br />
</p>
 <a href="ve_exp4.html"
onclick="window.open(\'ve_exp4.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;"><br />
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment</li></ul></u></i> 
 </p></a>
<!-- <object codetype="application/java" classid="java:crc.emt.demos.CoulombsLaw$MyApplet.class"  width="900" height="660" title="Electric field">
</object> -->
';

$theory4 = '
<p style="font-family:serif;font-size:17px">
Magnetic fields are produced by magnets and moving electric fields. A current through a straight wire produces magnetic field.  For example as shown in the figure a straight wire carrying current creates magnetic field which causes the iron fillings to align in circular fashion.<br /><br />


<img src="images/magnetostatics/1.jpg" alt=""><br />

In 1820, Hans Christian Oersted found that  a magnetic compass needle deflects when placed near a wire carrying current. <br /><br />
Biot and Savart  formulated that  the magnetic field  <i>dB</i> produced at a point P,
as shown in Figure , by the differential current element <i>Idl</i> is proportional to the
product<i> Idl</i> and the sine of the angle &theta; between the element and the line joining P to
the element and is inversely proportional to the square of the distance between P
and the element.<br /><br />


<img src="images/magnetostatics/2.jpg" alt=""><br />
<img src="images/magnetostatics/3.jpg" alt=""><br />

=>

<img src="images/magnetostatics/4.png" alt=""><br />

<br />
Direction of the magnetic field is given by right hand rule as shown in the figures below. <br /><br />

<img src="images/magnetostatics/5.jpg" alt=""><br />
<img src="images/magnetostatics/6.jpg" alt=""><br />


 Magnetic fields are characterized by H, magnetic field intensity (magnetic field strength) or B, magnetic field (magnetic flux density or magnetic induction). As E and D are related according to  D = &epsilon;E for linear material space, H and B are related according to B = &mu;H,   where &mu; is the permeability of the material and its units are henry per metre (H/m) (kg.m.s<sup>-2</sup>.A<sup>-2</sup> ).<br /><br />

We have seen various charge distributions like line charge, surface and volume charge. In the similar manner we can have current distributions like line current, surface current density characterized by K(in amperes/meter) and volume current density characterized by J(in amperes/meter<sup>2</sup>). The three sources are related as follows.
<br />


<img src="images/magnetostatics/7.jpg" alt=""><br />
<img src="images/magnetostatics/8.jpg" alt=""><br />
Fig: Various distributions of current: (a) line current (b) surface current  (c) volume current<br /><br />

In terms of the distributed current sources, the Biot-Savart law  becomes:<br />


<img src="images/magnetostatics/9.png" alt=""><br />

<b><u><i style="color:green">Ampere\'s Law</i></u></b><br><br>

It is some times difficult to find the magnetic field due to various current distributions. 
In 1826 Andre-Marie Ampere formulated that the line integral of the tangential component of B
around a closed path is the same as the net current I penetrating the closed surface (formed by the closed path) times &mu;<sub>0</sub> enclosed by the path. To obtain the magnetic field intensity remove the &mu;<sub>0</sub> from the below expression and replace B by H.        <br /><br />
<img src="images/magnetostatics/10.png" alt=""><br />

We now apply Ampere\'s circuit law to determine H(multiply by &mu; to obtain B) for some symmetrical current distributions
as you would have done using Gauss\'s law for charge distributions. We will consider an infinite line current and an infinite
current sheet.<br /><br />
<img src="images/magnetostatics/11.jpg" alt=""><br />

Let us consider a long filamentary current I(by filamentary we mean the radius of is negligible or very thin) which is placed  along the z-axis as in Figure. 

We assume it to be infinitely long. Our aim is to determine the magnetic field intensity H at point P. We have to choose a closed path (when we form a closed surface with this path it must be penetrated by a filamentary current - you will appreciate the significance of the idea of penetration when working with current loop containing several turns) and it must pass through the point P. The path is as shown above and is called as <i>Amperian Path</i>. 

If you choose a symmetrical path then solving the problem would be easy. Now evaluating the mathematical part of ampere\'s law would yield:<br />

<img src="images/magnetostatics/12.jpg" alt=""><br />
Which turns out to be:<br />
<img src="images/magnetostatics/13.jpg" alt=""><br />

But if we consider a finite line current  AB as shown below and magnetic field at a point P, whose distance  is comparable to the dimensions of the length then the integral results in<br />
<img src="images/magnetostatics/14.jpg" alt=""><br />
<img src="images/magnetostatics/15.png" alt=""><br />

Choosing an Amperian path would be tricky in above case. The Amperian path must contain the point P and the surface formed by the path must be penetrated by the current.<br />

<br />
Now let us consider an infinite plane sheet containing an electric current which is in the same direction everywhere. The strength of the current would be described by current per unit length (with the \'length\' drawn at right angles to the direction of the current). So the units of \'surface current density\' would be amps/metre.<br /><br />

To find the H at a distance a/2 from the sheet whose surface current density is K<sub>y</sub>a<sub>y</sub> A/m we first need to have an idea of what H is like. To achieve this, we regard the infinite sheet as comprising of filaments; <i>dH</i> above or below the sheet due to a pair of filamentary currents located at 1 and 2 is shown below.<br />
<img src="images/magnetostatics/16.jpg" alt=""><br />


 The Bio-Savart law shows that the contributions to H<sub>z</sub> produced by a symmetrically located pair of filaments cancel. Thus, H<sub>z</sub> is  zero  and only H<sub>x</sub> component is present. 

It is evident from the figure below that no current filament can produce H<sub>y</sub> . <br /><br />
Therefore to apply ampere\'s law we can choose the amperian path as 1-2-3-4.
<img src="images/magnetostatics/18.jpg" alt=""><br />
Applying Ampere\'s law we have <br /><br />

<img src="images/magnetostatics/19.jpg" alt=""><br />
where <br />
<img src="images/magnetostatics/20.jpg" alt=""><br />

Thus we can find magnetic field (or its intensity) due to various current distributions applying Ampere\'s Law and we need to have prior knowledge of how magnetic field would be like, to choose the appropriate Amperian Path.

</p>
';
$quiz4 = '
<html>
<head>
<font size="3">
<title>Quiz on Magnetostatic Fields</title>

<script>


//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
   numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);
   numCorrect += checkQuestionRadio( document.quiz.q6);
   numCorrect += checkQuestionRadio( document.quiz.q7);
   numCorrect += checkQuestionRadio( document.quiz.q8);
   numCorrect += checkQuestionRadio( document.quiz.q9);
   numCorrect += checkQuestionRadio( document.quiz.q10);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");
   highlightCorrectButton("correct6");
   highlightCorrectButton("correct7");
   highlightCorrectButton("correct8");
   highlightCorrectButton("correct9");
   highlightCorrectButton("correct10");

   //produce output in textarea.
   document.quiz.output.value +=
     "You got " + numCorrect + " out of 10 questions correct.\n" +
     "The correct answers are highlighted." 
}
</script>
</head>
<body>

<form name="quiz">
<ol>
<li><b>One of the following is not a source of magnetostatic fields: </b><br>
   <input type="radio" name="q1" value="wrong">  A charged disk rotating at uniform speed <br>
   <input type="radio" name="q1" value="wrong"> A permanent magnet <br>
   <span id="correct1"><input type="radio" name="q1" value="correct"> An accelerated charge</span><br>
   <input type="radio" name="q1" value="wrong"> An electric field linearly changing with time.<br>
   
</li><br />
<hr><br />

<li><b>The z-axis carries filamentary current of  10&pi;A along a<sub>z</sub>. Which of these is incorrect?</b><br>
   <input type="radio" name="q2" value="wrong"> H =-0.8a<sub>x</sub>, - 0.6a<sub>y</sub> ,at (-3,4,0)<br>
   <input type="radio" name="q2" value="wrong"> H = a<sub>&phi;</sub> A/m at (10, &pi;/2, 0)<br>
   <input type="radio" name="q2" value="wrong"> H = -0.6a<sub>x</sub>, - 0.8a<sub>y</sub> ,at (-4,3,0)<br>
   <span id="correct2"><input type="radio" name="q2" value="correct"> H = - a<sub>&phi;</sub>, at ( 5,3&pi;/2,0)</span><br>
</li><br />
<hr><br />

<li><b>Two identical coaxial circular coils with same dimensions carry the same current I but in opposite directions. The magnitude of the magnetic field B at a point on the axis midway between the coils is</b><br>
   <input type="radio" name="q3" value="wrong"> The same as that produced by one coil<br>
   <input type="radio" name="q3" value="wrong"> Half that produced by one coil.<br>
   <span id="correct3"><input type="radio" name="q3" value="correct"> Zero</span><br>
   <input type="radio" name="q3" value="wrong"> Twice that produced by one coil<br>
</li><br />
<hr><br />

<li><b>Static magnetic field is :  </b><br />
   <input type="radio" name="q4" value="wrong"> Non conservative <br>
   <input type="radio" name="q4" value="wrong"> Conservative <br>
   <input type="radio" name="q4" value="wrong"> Solenoidal <br>
   <span id="correct4"><input type="radio" name="q4" value="correct"> Both A and C </span><br>
</li><br />
<hr><br />

<li><b> If the direction of current in a straight current carrying wire is along the positive z axis, then the direction of the magnetic field induced is ______ when seen from positive z axis.</b><br>
   <span id="correct5"><input type="radio" name="q5" value="correct"> Anticlockwise</span><br>
   <input type="radio" name="q5" value="wrong"> Clockwise<br>
   <input type="radio" name="q5" value="wrong"> Its is not circular<br>
   <input type="radio" name="q5" value="wrong"> None of the above<br>
</li><br />
<hr><br />

<li><b>In the above question the magnitude of the magnetic field produced due to current carrying wire varies ______ with ______ of perpendicular distance from the Z axis.</b><br>
   <input type="radio" name="q6" value="wrong"> Directly, square<br>
   <span id="correct6"><input type="radio" name="q6" value="correct"> Inversely ,square</span><br>
   <input type="radio" name="q6" value="wrong"> Directly, cube<br>
   <input type="radio" name="q6" value="wrong"> Inversely,cube<br>
</li><br />
<hr><br />

<li><b> If the direction of current in a straight current carrying wire is along the positive z axis, then the magnitude of the magnetic field induced is ______ proportional to the current.</b><br>
   <span id="correct7"><input type="radio" name="q7" value="correct"> Directly </span><br>
   <input type="radio" name="q7" value="wrong"> Inversely <br>
   <input type="radio" name="q7" value="wrong"> Square <br>
   <input type="radio" name="q7" value="wrong"> None of these<br>
</li><br />
<hr><br />

<li><b>Magnetic field direction at a point (0,0,h),where h is positive, due to a uncharged circular disc placed on the x-y plane (z=0) is along </b><br>
   <input type="radio" name="q8" value="wrong"> Positive Z axis<br>
   <input type="radio" name="q8" value="wrong"> Negative Z axis  <br>
   <input type="radio" name="q8" value="wrong"> X axis <br>
   <span id="correct8"><input type="radio" name="q8" value="correct"> None</span><br>
</li><br />
<hr><br />

<li><b>Unit of magnetic Flux Density is </b><br>
   <span id="correct9"><input type="radio" name="q9" value="correct"> Weber/meter square</span><br>
   <input type="radio" name="q9" value="wrong"> Weber/meter <br>
<input type="radio" name="q9" value="wrong"> Weber meter <br>
   <input type="radio" name="q9" value="wrong"> Weber meter square <br>
                                              </li><br />
<hr><br />
<li><b> Magnetic field induced by a straight current carrying wire is :</b><br>
   <span id="correct10"><input type="radio" name="q10" value="correct"> Circular in nature and are parallel to each other </span><br>
<input type="radio" name="q10" value="wrong"> Circular in nature and converging  <br>
   <input type="radio" name="q10" value="wrong"> Circular in nature and diverging  <br>
   <input type="radio" name="q10" value="wrong"> None <br>
</li><br />
<hr><br />

</ol>

<input type="button" onClick="checkQuiz()" value="check quiz">
<hr>
<textarea cols="80" rows="10" name="output"></textarea>
</form>
</font>
</body>


</html>';


$ref4 = '
<ol>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Physics for scientists and Engineers with
Modern Physics," New Jersey: Pearson Prentice Hall, 2009 by <i>Douglas C. Giancoli</i></p>.
</li>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Elements of Electromagnetics,"  New York:
Oxford University Press, 2006 by <i> Mattew.N.O.Sadiku</i></p>
</p>
</li>
 <li> 
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Engineering Electromagnetics," New Delhi:  McGraw Hill, 2006.
by  <i>William H. Hayt, Jr., John A. Buck</i>.  </li>
<br /><br />
</ol>
<p style="font-family:serif;font-size:17px">
<b><i><u>WEB REFERENCES</u></i></b>: <br /><br>
<a href="http://en.wikipedia.org/wiki/Ampere%27s_circuital_law">http://en.wikipedia.org/wiki/Ampere%27s_circuital_law<br></a>
</p>
';

$feedback4 = '<html><body><br /><br /><br /><br /><p style="color:green"> <p style="font-size:16px"> <p style="font-size:16px; color:green"> To be Updated soon ...    <br /></body></html>';


$intro4 = mysql_real_escape_string($intro4);
$obj4 = mysql_real_escape_string($obj4);
$manual4 = mysql_real_escape_string($manual4);
$procedure4 = mysql_real_escape_string($procedure4);
$virExp4 = mysql_real_escape_string($virExp4);
$theory4 = mysql_real_escape_string($theory4);
$quiz4 = mysql_real_escape_string($quiz4);
$ref4 = mysql_real_escape_string($ref4);
$feedback4 = mysql_real_escape_string($feedback4);

$intro7 = '
<html><body><br /><p style="font-size:18px; color:green"> Wave Propagation </p> <br />

<p style="font-family:serif;font-size:17px">

Till now we have learned about static charges, moving charges which produces Electromagnetic waves, Maxwells equation, faradays law and lot more. Now, we will learn about the propagation of electromagnetic waves which is widely used in TV signals, radar beams, microwaves and all types of communication. <br />

In general, Electromagnetic waves are the means of transporting energy or information and posses the general properties of waves i.e travelling at high velocity etc.We will also deal with the properties of Electromagnetic waves in following media :<br /><br />
 
1)Free space <br />
2)Lossless dielectric  <br />
3)Lossy dielectric <br />
4)Good Conductor <br /><br />

Electromagnetic radiation is a transverse wave meaning that the oscillations of the waves are perpendicular to the direction of energy transfer and travel. An important aspect of the nature of light is frequency. The frequency of a wave is its rate of oscillation and is measured in hertz, the SI unit of frequency, where one hertz is equal to one oscillation per second. Light usually has a spectrum of frequencies which sum together to form the resultant wave. Different frequencies undergo different angles of refraction.<br />

<img src="images/waves/1.jpg" alt=""><br />

A wave consists of successive troughs and crests, and the distance between two adjacent crests or troughs is called the wavelength. Waves of the electromagnetic spectrum vary in size, from very long radio waves the size of buildings to very short gamma rays smaller than atom nuclei. Frequency is inversely proportional to wavelength, according to the equation: <br />


<img src="images/waves/2.png" alt=""><br />

where v is the speed of the wave (c in a vacuum, or less in other media), f is the frequency and &lambda; is the wavelength.
</p>
</body></html>';
$obj7 = '

<p style="font-family:serif;font-size:17px;color:green">
<i>The main objectives of this experiment are the following:</i><br /><br />
</p>
<ol>
    <li> <p style="font-family:serif;font-size:17px">
 To observe the propagation of wave in various materials </p></li>
    <li> <p style="font-family:serif;font-size:17px">
 To measure the amplitude of E field at a particular location in space or any material as time varies. </p> </li>
 </ol>

';

$manual7 = '
<p style="font-family:serif;font-size:17px">
Please note the following things from the video:<br /><br />
1. how to <b style="color:green">start</b> experiment <br>
2. how to move on to <b style="color:green">next</b> stage of experiment<br />
3. where to see the output values <br />
4. what are the main concepts in the experiment (shown in the yellow colored text boxes)<br /><br />
Use the video controls to <b>pause</b> the video, <b>replay</b> the video, etc.<br />
<br />
<a href="manual7.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial</li></ul></u></i></a>
</p>
';

$procedure7 = '<html><body> 
<p style="font-family:serif;font-size:17px">

This experiment consists of three stages and each stage will teach you a new concept.<br /><br />

The experiment was designed in a way, so that you can quickly change the parameters and observe the results. This makes you to have a more clear picture of the concepts.
<br /><br />
Start the experiment by pressing <i style="color:green">start</i> button<br /><br />

<ul>
<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 1</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">

In this stage you are going to experiment with various materials and observe the behaviour of waves in those materials.

<ol>
<li> <p style="font-family:serif;font-size:17px">In this stage you are going to experiment with various materials and observe the behaviour of waves in those materials. </li>
<li> <p style="font-family:serif;font-size:17px">First of all, choose the kind of material from the selection box provided at the bottom of experiment window. Then, choose the kind of wave with which you want to experiment. For example, choose "Lossy" kind of wave. Now, you can set the parameters like Electric Field, frequency and alpha parameters using the sliders provided at the bottom of the experiment window. Measure the Value of E at various points.</li>
<li> <p style="font-family:serif;font-size:17px">Check whether you make out any difference between Lossy wave and other kinds of waves. If you cannot find out the difference, you should go through the theory once again !!!</li>
<li> <p style="font-family:serif;font-size:17px">Write a report of your observations. After completing this, move on to the next stage by clicking on "Next" button provided at the top of the experiment window. </li>
</ol>
<br />
</p>
</li>

<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 2</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li> <p style="font-family:serif;font-size:17px">This stage is not different from previous stage. It is just a static view of previous stage. Now you can better measure the value of electric field at each point in the space.</li>
<li> <p style="font-family:serif;font-size:17px">Do the same as above and write a report of your observations. After completing this, move on to the next stage by clicking on "Next" button provided at the top of the experiment window.</li>
</ol><br />
</p>
</li>


<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 3</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li> <p style="font-family:serif;font-size:17px">Here, you dont see the start button as activated. You can directly do experiment. This stage will help you to measure amplitude of E field at a particular location in space as time varies.</li>
<li> <p style="font-family:serif;font-size:17px"> The parameters are same as for above stages. Do the same as above and write a report of your observations. If you want to go back to previous stages, click "Back" button provided at the top of the experiment window. </li>
</ol>
</p>
</li>

  <br /></body></html>';
$virExp7 = '

<p style="font-family:serif;font-size:17px">

<b><u style="color:#B0171F;">Pre-Quiz Questions</u>:</b></br></br></p>
<p style="font-family:serif;font-size:17px">
Test your Understanding on Wave propagation, by going through the following quiz:<br />
&nbsp;&nbsp;<a href="preQuiz7.php" target="_blank"><i style="color:green"><u><ul><li>Start the Quiz</li></ul></u></i></a>
</p><br /><br />

<p style="font-family:serif;font-size:17px">
<b><u style="color:#B0171F">Virtual Experiment</u>:</b><br />
Please make sure that you are going to perform experiment only after going through the following sections:<br /><br />
1. Video Tutorial<br />
2. Procedure<br />
3. Objectives<br />
</p>
<a href="ve_exp7.html"
onclick="window.open(\'ve_exp7.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;"><br />
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment</li></ul></u></i> 
 </p></a>
 <!-- <object codetype="application/java" classid="java:crc.emt.demos.CoulombsLaw$MyApplet.class"  width="900" height="660" title="Electric field">
</object> -->';

$theory7 = '
<p style="font-family:serif;font-size:17px">

A  wave is a function of both space and time can be defined in partial differential equation of second order. <br />

<img src="images/waves/3.png" alt=""><br />

Where u is the wave velocity.<br />

<img src="images/waves/4.png" alt=""><br />

Electromagnetic Wave travelling in z(+ ve) direction.<br />
A wave equation in terms of scalar be expressed in the phasor form in the following manner :<br />


<img src="images/waves/5.png" alt=""><br />

Where &omega; is the angular frequency, A and B are real constants.<br />

A negative sign in (&omega;t + &beta;z) is associated with a wave propagating in the +z direction (forward travelling or positive-going wave) whereas a positive sign indicates that a wave is travelling in the -z direction (backward travelling or negative going wave).

<br /> <br />
<b><u><i style="color:green">1. Wave propagation in Lossy Dielectrics :</i></u></b><br><br>

Now, we will see the EM waves propogation in lossy dielectric.  A lossy dielectric is a medium in which an EM wave loses power as it propagates due to poor conduction.<br />
So, We can also say that a lossy dielectric is a partially conducting medium (imperfect dielectric or
imperfect conductor) with as distinct from a lossless dielectric (perfect or good dielectric)
in which a = 0.<br />

According to maxwells equation :<br />

<img src="images/waves/6.png" alt=""><br />

Taking curl on both sides of the 3rd maxwell\'s equation :<br />

<img src="images/waves/7.png" alt=""><br />
If we apply  vector identity given below to the above equation, <br />
<img src="images/waves/8.png" alt=""><br />
We will get the following equation,<br />
<img src="images/waves/9.png" alt=""><br />
Or  in more simplified manner we can say that<br />
<img src="images/waves/10.png" alt=""><br />
This is also known as the wave equation, where <br />
<img src="images/waves/11.png" alt=""><br />
Gamma is the propagation constant, which is a complex number, so we can also write it as <br />
<img src="images/waves/12.png" alt=""><br />
Value of &alpha; and &beta; can be easily expressed by comparison with the above equation.<br />
<img src="images/waves/13.png" alt=""><br />

Since the wave is propagating alone positive z direction this Es will only have x component , 
E<sub>s</sub> = E<sub>xs</sub>(z) <br />
Substituting this into the wave equation,<br />

<img src="images/waves/14.png" alt=""><br />
Which is a  second order linear homogeneous differential equation, which has the solution<br />

<img src="images/waves/15.png" alt=""><br />
Further simplifying, we will get <br />
<img src="images/waves/16.png" alt=""><br />
On solving above equation with the maxwell\'s equation, we will arrive at  the following conclusion i.e <br />
<img src="images/waves/17.png" alt=""><br />
Where, <br />
<img src="images/waves/18.png" alt=""><br />

&eta;  is a complex quantity known as the intrinsic impedance (in ohms) of the medium. 

<img src="images/waves/19.png" alt=""><br />
Substituting this value of intrinsic impedance in the above equations, we get <br />
<img src="images/waves/20.png" alt=""><br />
&alpha; is the attenuation factor and  &beta; is the wave number, which can be expressed as:
<img src="images/waves/21.png" alt=""><br />
In EM waves,  the difference between the phase of E and H is given by  &theta;/2  i.e 

<img src="images/waves/22.png" alt=""><br />

Where Js is the Conduction current density , whereas Jd is the displacement current density Jds in the lossy medium , tanO is the loss tangent and O is the loss angle of the medium. <br />
<br />

<b><u><i style="color:green">2. Lossless Dielectric :</i></u></b><br><br>
In a lossless dielectric, a << we.
<img src="images/waves/23.png" alt=""><br />
Substituting these value into the above derived equation, we get  <br />

<img src="images/waves/24.png" alt=""><br />
And also the intrin <br />

<img src="images/waves/25.png" alt=""><br />
Thus E and H are in phase with each other.<br />

<br />
<b><u><i style="color:green">3. Free Space :  </i></u></b><br><br>

In free space &epsilon; is simply replaced by &epsilon; and &mu; by &mu;<sub>o</sub>.

<img src="images/waves/26.png" alt=""><br />
<img src="images/waves/27.png" alt=""><br />

Where c is the speed of light in a vaccum.  Here the loss angle is 0 and the intrinsic impedance of free space is given by:<br />

<img src="images/waves/28.png" alt=""><br />
<br />

<b><u><i style="color:green">4. Good Conductor</i></u></b><br><br>

Perfect conductor is one in which the conductivity is very high in comparison to the product of angular frequency and permittivity .<br />

<img src="images/waves/29.png" alt=""><br />
In the case of good conductor , the attenuation factor and the wave number are equal and is given by :<br />

<img src="images/waves/30.png" alt=""><br />

And E leads H by 45, as intrinsic impedance is <br />

<img src="images/waves/31.png" alt=""><br />

</p>
';
$quiz7 = '
<html>
<head>
<font size="3">
<title>Quiz on Wave Propagation</title>

<script>


//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
   numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);
   numCorrect += checkQuestionRadio( document.quiz.q6);
   numCorrect += checkQuestionRadio( document.quiz.q7);
   numCorrect += checkQuestionRadio( document.quiz.q8);
   numCorrect += checkQuestionRadio( document.quiz.q9);
   numCorrect += checkQuestionRadio( document.quiz.q10);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");
   highlightCorrectButton("correct6");
   highlightCorrectButton("correct7");
   highlightCorrectButton("correct8");
   highlightCorrectButton("correct9");
   highlightCorrectButton("correct10");

   //produce output in textarea.
   document.quiz.output.value +=
     "You got " + numCorrect + " out of 10 questions correct.\n" +
     "The correct answers are highlighted." 
}
</script>
</head>
<body>

<form name="quiz">
<ol>
<li><b>A wave equation is  </b><br>
   <span id="correct1"><input type="radio" name="q1" value="correct"> Second order differential equation </span><br>
   <input type="radio" name="q1" value="wrong"> First Order differential equation <br>
   <input type="radio" name="q1" value="wrong"> Linear equation  <br>
   <input type="radio" name="q1" value="wrong"> None of the above <br>
   
</li><br />
<hr><br />

<li><b>In a perfect conductor with infinite conductivity,  Electric field component leads Magnetic field component by:</b><br>
   <input type="radio" name="q2" value="wrong"> 0<br>
   <span id="correct2"><input type="radio" name="q2" value="correct"> 45</span><br>
   <input type="radio" name="q2" value="wrong"> 90<br>
   <input type="radio" name="q2" value="wrong"> 180<br>
</li><br />
<hr><br />

<li><b> Conductivity for which of the following medium is zero </b><br>
   <input type="radio" name="q3" value="wrong"> Lossy dielectrics  and Free space <br>
   <input type="radio" name="q3" value="wrong"> Good Conductor  and Lossless Dielectrics <br>
   <input type="radio" name="q3" value="wrong"> Lossless and Lossy Dielectrics <br>
 <span id="correct3"><input type="radio" name="q3" value="correct"> Free space  and  Lossless Dielectrics </span><br>
</li><br />
<hr><br />

<li><b>In a perfect conductor, the ratio of the attenuation constant to that of wave number is   </b><br />
   <span id="correct4"><input type="radio" name="q4" value="correct"> Depends on the conductor  </span><br>
   <input type="radio" name="q4" value="wrong"> 1 <br>
   <input type="radio" name="q4" value="wrong"> 1/2 <br>
   <input type="radio" name="q4" value="wrong"> 2 <br>
</li><br />
<hr><br />

<li><b>For Perfect conductor and lossless dielectric, loss tangent is :</b><br>
   <input type="radio" name="q5" value="wrong"> Less than 1 in both cases <br>
   <input type="radio" name="q5" value="wrong"> More than 1 in both cases <br>
<span id="correct5"><input type="radio" name="q5" value="correct"> Less than and greater than 1 respectively </span><br>
   <input type="radio" name="q5" value="wrong"> None of the above<br>
</li><br />
<hr><br />

<li><b>What is the major factor for determining whether a medium is free space, lossless dielectric,lossy dielectric, or good conductor?</b><br>
   <span id="correct6"><input type="radio" name="q6" value="correct"> Loss tangent </span><br>
   <input type="radio" name="q6" value="wrong"> Attenuation factor <br>
   <input type="radio" name="q6" value="wrong"> Wave number <br>
   <input type="radio" name="q6" value="wrong"> Reflection coefficient <br>
</li><br />
<hr><br />

<li><b> If we increase the wavelength of an EM wave to twice that of original, then the new wave number is :</b><br>
   <input type="radio" name="q7" value="wrong">Remains the same <br>
   <input type="radio" name="q7" value="wrong">Increase to twice  <br>
<span id="correct7"><input type="radio" name="q7" value="correct"> Reduced to half </span><br>
   <input type="radio" name="q7" value="wrong"> None of these<br>
</li><br />
<hr><br />

<li><b> If the wave velocity of a EM wave is 3*  m/sec and the angular frequency is , then the wave number is : </b><br>
   <input type="radio" name="q8" value="wrong"> 3 rad/m<br>
   <span id="correct8"><input type="radio" name="q8" value="correct"> 0.333 rad/m   </span><br>

   <input type="radio" name="q8" value="wrong"> 1 rad/m  <br>
   <input type="radio" name="q8" value="wrong"> Cannot be determined <br>
</li><br />
<hr><br />

<li><b>if &sigma; = &omega;&epsilon;, what is the relation between wave number and attenuation factor. </b><br>

   <input type="radio" name="q9" value="wrong"> Depends upon &mu; <br>
<input type="radio" name="q9" value="wrong"> Both are equal  <br>
   <span id="correct9"><input type="radio" name="q9" value="correct"> Wave number is greater than attenuation factor </span><br>
   <input type="radio" name="q9" value="wrong"> Attenuation factor is greater than wave number <br>
                                              </li><br />
<hr><br />
<li><b> Intrinsic Impedance is the ratio of  ____  to ____ and its unit is ____ .</b><br>
<input type="radio" name="q10" value="wrong"> Electric field amplitude to Magnetic field amplitude, Watts <br>
   <input type="radio" name="q10" value="wrong"> Magnetic field amplitude to Electric field amplitude, Ohms  <br>
   <span id="correct10"><input type="radio" name="q10" value="correct"> Electric field amplitude to Magnetic field amplitude, Ohms</span><br>
   <input type="radio" name="q10" value="wrong"> Magnetic field amplitude to Electric field amplitude, Watts<br>
</li><br />
<hr><br />

</ol>

<input type="button" onClick="checkQuiz()" value="check quiz">
<hr>
<textarea cols="80" rows="10" name="output"></textarea>
</form>
</font>
</body>


</html>';
$ref7 = '
<ol>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Physics for scientists and Engineers with
Modern Physics," New Jersey: Pearson Prentice Hall, 2009 by <i>Douglas C. Giancoli</i></p>.
</li>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Elements of Electromagnetics,"  New York:
Oxford University Press, 2006 by <i> Mattew.N.O.Sadiku</i></p>
</p>
</li>
 <li> 
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Engineering Electromagnetics," New Delhi:  McGraw Hill, 2006.
by  <i>William H. Hayt, Jr., John A. Buck</i>.  </li>
<br /><br />
</ol>
<p style="font-family:serif;font-size:17px">
<b><i><u>WEB REFERENCES</u></i></b>: <br /><br>
<a href="http://micro.magnet.fsu.edu/primer/java/polarizedlight/emwave/index.html">http://micro.magnet.fsu.edu/primer/java/polarizedlight/emwave/index.html<br></a>
<a href="http://en.wikipedia.org/wiki/Electromagnetic_radiation">http://en.wikipedia.org/wiki/Electromagnetic_radiation<br></a>
</p>
';


$feedback7 = '<html><body><br /><br /><br /><br /><p style="color:green"> <p style="font-size:16px"> <p style="font-size:16px; color:green"> To be Updated soon ...    <br /></body></html>';


$intro7 = mysql_real_escape_string($intro7);
$obj7 = mysql_real_escape_string($obj7);
$manual7 = mysql_real_escape_string($manual7);
$procedure7 = mysql_real_escape_string($procedure7);
$virExp7 = mysql_real_escape_string($virExp7);
$theory7 = mysql_real_escape_string($theory7);
$quiz7 = mysql_real_escape_string($quiz7);
$ref7 = mysql_real_escape_string($ref7);
$feedback7 = mysql_real_escape_string($feedback7);


$intro8 = '
<html><body><br /><p style="font-size:18px; color:green"> Distance and altitude measurement  </p> <br />

<p style="font-family:serif;font-size:17px">
As by now, we have holistic understanding of the electromagnetic waves, materials, boundary condition, waveguides etc. In this, we will discuss on one of the widely used practical application of electromagnetic waves i.e to calculate the distance of between two flying planes and to measure the height of the plane from the ground level. <br /><br />

Electromagnetic wave propagate in a direction with electric and magnetic  field in perpendicular direction. The speed of waves depends on the type of medium and its features. Depending upon certain properties of waves, the distance between the flying object or the ground can be calculated. 


<img src="images/altitude/1.png" alt=""><br />

It has ample application i.e RADAR. Radar is an object-detection system which uses electromagnetic waves - specifically radio waves - to determine the range, altitude, direction, or speed of both moving and fixed objects such as aircraft, ships, spacecraft, guided missiles, motor vehicles, weather formations, and terrain. In aviation, aircraft are equipped with radar devices that warn of obstacles in or approaching their path and give accurate altitude reading.

</body></html>';
$obj8 = '
<p style="font-family:serif;font-size:17px;color:green">
<i>The main objectives of this experiment are the following:</i><br /><br />
</p>
<ol>
    <li> <p style="font-family:serif;font-size:17px">
 To determine the distance between two flying objects i.e planes by sending and recieveing the waves from one planes </p> </li>
    <li> <p style="font-family:serif;font-size:17px">
 To determine the altitude of the plane from the ground.  </p></li>
 </ol>

';
$manual8 = '
<p style="font-family:serif;font-size:17px">
Please note the following things from the video:<br /><br />
1. how to <b style="color:green">start</b> experiment <br>
2. how to move on to <b style="color:green">next</b> stage of experiment<br />
3. where to see the output values <br />
4. what are the main concepts in the experiment (shown in the yellow colored text boxes)<br /><br />
Use the video controls to <b>pause</b> the video, <b>replay</b> the video, etc.<br />
<br />
<a href="manual8.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial</li></ul></u></i></a>
</p>
';

$procedure8 = '<html><body> 
<p style="font-family:serif;font-size:17px">

This experiment consists of three stages and each stage will teach you a new concept.<br /><br />

The experiment was designed in a way, so that you can quickly change the parameters and observe the results. This makes you to have a more clear picture of the concepts.
<br /><br />
Start the experiment by pressing <i style="color:green">start</i> button<br /><br />

<ul>
<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 1</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">

<ol>
<li> <p style="font-family:serif;font-size:17px"> In this stage you are going to determine the distance between two flying objects i.e planes by sending and recieveing the waves from one plane. </li>
<li> <p style="font-family:serif;font-size:17px"> Adjust the distance between two planes using the slider. </li>
<li> <p style="font-family:serif;font-size:17px"> Now measure the distance by pressing the button "Calculate Distance". Now, note down the values of distance and time.</li>
<li> <p style="font-family:serif;font-size:17px"> Do this with various values of parameters and write a report of your observations. After completing this, move on to the next stage by clicking on "Next" button provided at the top of the experiment window. </li>
</ol><br />
</p>
</li>

<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 2</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">

<ol>
<li> <p style="font-family:serif;font-size:17px"> This stage is not different from previous stage. Previously you measured distance between two planes. Now, you measure the height of a plane from the ground. </li>
<li> <p style="font-family:serif;font-size:17px"> You can adjust the height of plane using the keyboard by pressing the keys "W" and "S".</li>
<li> <p style="font-family:serif;font-size:17px"> Now measure the height by pressing the button "Calculate Distance".</li>
<li> <p style="font-family:serif;font-size:17px"> Note down the values of height and time. Do this with various values of parameters and write a report of your observations.</li>
<li> <p style="font-family:serif;font-size:17px"> At any point of time, you can move on to the previous stage by clicking on "Back" button provided at the top of the experiment window. </li>
</ol>
</p>
</li>


  <br /></body></html>';

$virExp8 = '

<p style="font-family:serif;font-size:17px">

<b><u style="color:#B0171F;">Pre-Quiz Questions</u>:</b></br></br></p>
<p style="font-family:serif;font-size:17px">
Test your Understanding on Altitude Measurement, by going through the following quiz:<br />
&nbsp;&nbsp;<a href="preQuiz8.php" target="_blank"><i style="color:green"><u><ul><li>Start the Quiz</li></ul></u></i></a>
</p><br /><br />

<p style="font-family:serif;font-size:17px">
<b><u style="color:#B0171F">Virtual Experiment</u>:</b><br />
Please make sure that you are going to perform experiment only after going through the following sections:<br /><br />
1. Video Tutorial<br />
2. Procedure<br />
3. Objectives<br />
</p>
 <a href="ve_exp8.html"
onclick="window.open(\'ve_exp8.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;"><br />
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment</li></ul></u></i> 
 </p></a>
 <!-- <object codetype="application/java" classid="java:crc.emt.demos.CoulombsLaw$MyApplet.class"  width="900" height="660" title="Electric field">
</object> -->';
$theory8 = '

<p style="font-family:serif;font-size:17px">

To measure the distance to an object, a short pulse of radio signal (electromagnetic radiation) is transmitted, and the time taken for the wave to return is measured. The distance is one-half the product of the round trip time (because the signal has to travel to the target and then back to the receiver) and the speed of the signal. Since radio waves travel at the speed of light (186,000 miles per second or 300,000,000 meters per second), accurate distance measurement requires high-performance electronics.<br /><br />

In most cases, the receiver does not detect the return while the signal is being transmitted. Through the use of a device called a duplexer, the radar switches between transmitting and receiving at a predetermined rate. The minimum range is calculated by measuring the length of the pulse multiplied by the speed of light, divided by two. In order to detect closer targets one must use a shorter pulse length<br /><br />

Let suppose the distance between two plans be s m. <br />
T be the time taken to get the reflected wave and v be the velocity of wave.<br />
<br />
So ,  s=(T*v)/2.<br />
<br />
<b><u><i style="color:green"> Doppler Effects :</i></u></b><br><br>

Doppler effect is a phenomena is the change in frequency of a wave for an observer moving relative to the source of the wav. The apparent frequency (f) of the wave changes with the relative position of the target. The doppler equation is stated as follows for v<sub>obs</sub> (the radial speed of the observer) and v<sub>s</sub> (the radial speed of the target) and f<sub>0</sub> frequency of wave :<br /><br />

<img src="images/altitude/2.png" alt=""><br />

However, the change in phase of the return signal is often used instead of the change in frequency. It is to be noted that only the radial component of the speed is available. Hence when a target is moving at right angle to the radar beam, it has no velocity while one parallel to it has maximum recorded speed even if both might have the same real absolute motion.<br />


';
$quiz8 = '
<html>
<head>
<font size="3">
<title>Quiz on Distance and Altitude Measurement</title>

<script>


//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
   numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);
   numCorrect += checkQuestionRadio( document.quiz.q6);
   numCorrect += checkQuestionRadio( document.quiz.q7);
   numCorrect += checkQuestionRadio( document.quiz.q8);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");
   highlightCorrectButton("correct6");
   highlightCorrectButton("correct7");
   highlightCorrectButton("correct8");

   //produce output in textarea.
   document.quiz.output.value +=
     "You got " + numCorrect + " out of 8 questions correct.\n" +
     "The correct answers are highlighted." 
}
</script>
</head>
<body>

<form name="quiz">
<ol>
<li><b>Instrument used to measure the distance of the plane from the station is : </b><br>
   <span id="correct1"><input type="radio" name="q1" value="correct"> RADAR </span><br>
   <input type="radio" name="q1" value="wrong"> SPEEDOMETER <br>
   <input type="radio" name="q1" value="wrong"> BLACK BOX  <br>
   <input type="radio" name="q1" value="wrong"> None of these<br>
   
</li><br />
<hr><br />

<li><b>To measure the distance of the plane from another plane, _______ phenomena for correcting the frequency  is taken into consideration. </b><br>
   <input type="radio" name="q2" value="wrong"> Webers <br>
   <input type="radio" name="q2" value="wrong"> Maxwell<br>
   <span id="correct2"><input type="radio" name="q2" value="correct"> Dopplers </span><br>
   <input type="radio" name="q2" value="wrong">None of these. <br>
</li><br />
<hr><br />

<li><b>If the target object is moving away  the transmitter, then the received waves  as observed from the receiver are at frequency ________ than the original </b><br>
   <input type="radio" name="q3" value="wrong"> Same <br>
<span id="correct3"><input type="radio" name="q3" value="correct"> Higher </span><br>
   <input type="radio" name="q3" value="wrong"> Lower<br>
   <input type="radio" name="q3" value="wrong"> Can\'t say<br>
</li><br />
<hr><br />

<li><b>SA radar sends a radio signal of frequency 9×109 Hz towards an aircraft approaching the radar. If the reflected wave shows a frequency shift of 3×103Hz, the speed with which the aircraft is approaching the radar in m/s is (velocity of radio signal is 3×108 m/s).</b><br />
   <span id="correct4"><input type="radio" name="q4" value="correct"> 100 m/s</span><br>
   <input type="radio" name="q4" value="wrong"> 50 m/s <br>
   <input type="radio" name="q4" value="wrong"> 25 m/s <br>
   <input type="radio" name="q4" value="wrong"> 200 m/s<br>
</li><br />
<hr><br />

<li><b> The Doppler effect is produced if</b><br>
   <input type="radio" name="q5" value="wrong"> the source is in motion.<br>
   <input type="radio" name="q5" value="wrong"> the detector is in motion.<br>
   <span id="correct5"><input type="radio" name="q5" value="correct"> both of the above.</span><br>
   <input type="radio" name="q5" value="wrong"> None of the above<br>
</li><br />
<hr><br />

<li><b>What sort of waves exhibit the Doppler effect?</b><br>
   <input type="radio" name="q6" value="wrong"> light waves.<br>
   <input type="radio" name="q6" value="wrong"> water waves. <br>
   <input type="radio" name="q6" value="wrong"> sound waves.<br>
   <span id="correct6"><input type="radio" name="q6" value="correct"> all of the above.</span><br>
</li><br />
<hr><br />

<li><b> Two vehicles at driving, in the same direction, down a highway at 100 km/h. A passenger in the leading car sounds a 1000 Hz whistle. What frequency will a passenger in the following car hear?</b><br>
   <input type="radio" name="q7" value="wrong"> < 1000 Hz. <br>
   <input type="radio" name="q7" value="wrong"> > 1000 Hz. <br>
   <span id="correct7"><input type="radio" name="q7" value="correct"> 1000 Hz </span><br>
   <input type="radio" name="q7" value="wrong"> Data insufficient <br>
</li><br />
<hr><br />

<li><b>MWhich of the following are the function of RADAR in aircraft ?</b><br>
   <input type="radio" name="q8" value="wrong"> Measuring speed <br>
   <input type="radio" name="q8" value="wrong"> Altitude <br>
   <input type="radio" name="q8" value="wrong"> Range<br>
   <span id="correct8"><input type="radio" name="q8" value="correct"> All of the above</span><br>
</li><br />
<hr><br />


</ol>

<input type="button" onClick="checkQuiz()" value="check quiz">
<hr>
<textarea cols="80" rows="10" name="output"></textarea>
</form>
</font>
</body>


</html>';

$ref8 = '
<ol>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Physics for scientists and Engineers with
Modern Physics," New Jersey: Pearson Prentice Hall, 2009 by <i>Douglas C. Giancoli</i></p>.
</li>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Elements of Electromagnetics,"  New York:
Oxford University Press, 2006 by <i> Mattew.N.O.Sadiku</i></p>
</p>
</li>
 <li> 
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Engineering Electromagnetics," New Delhi:  McGraw Hill, 2006.
by  <i>William H. Hayt, Jr., John A. Buck</i>.  </li>
<br /><br />
</ol>
<p style="font-family:serif;font-size:17px">
<b><i><u>WEB REFERENCES</u></i></b>: <br /><br>
<a href="http://en.wikipedia.org/wiki/Doppler_effect">http://en.wikipedia.org/wiki/Doppler_effect<br></a>
<a href="http://www.radartutorial.eu/01.basics/rb04.en.html">http://www.radartutorial.eu/01.basics/rb04.en.html<br></a>
</p>
';

$feedback8 = '<html><body><br /><br /><br /><br /><p style="color:green"> <p style="font-size:16px"> <p style="font-size:16px; color:green"> To be Updated soon ...    <br /></body></html>';



$intro8 = mysql_real_escape_string($intro8);
$obj8 = mysql_real_escape_string($obj8);
$manual8 = mysql_real_escape_string($manual8);
$procedure8 = mysql_real_escape_string($procedure8);
$virExp8 = mysql_real_escape_string($virExp8);
$theory8 = mysql_real_escape_string($theory8);
$quiz8 = mysql_real_escape_string($quiz8);
$ref8 = mysql_real_escape_string($ref8);
$feedback8 = mysql_real_escape_string($feedback8);


$intro9 = '
<html><body><br /><p style="font-size:18px; color:green"> Plane Waves - Reflection and Refraction  </p> <br />

<p style="font-family:serif;font-size:17px">
We have discussed in detail about the waves propagation in various type of medium i.e.  lossy, lossless, conductor and insulator  and the various factor associated with it like wave number, propagation constant etc. Now, its time to study about the reflection of the plane wave at oblique incidence and later we will discuss about the special case of normal incidence.<br /><br />

<b>Reflection</b><br />
When a plane wave encounters a change in medium, some or all of it may propagate into the new medium or be reflected from it. The part that enters the new medium is called the transmitted portion and the other the reflected portion. The part which is reflected has a very simple rule governing its behavior. Make the following construction:<br />

<img src="images/ref/1.jpg" alt=""><br />
Fig 1. Reflection of a plave wave from the mirror<br />

Angle of Incidence = the angle between the direction of propagation and a line perpendicular to the boundary, on the same side of the surface.
 Angle of Reflection = the angle between the direction of propagation of the reflected wave and a line perpendicular to the boundary, also on the same side of the surface.<br /><br />

<b>Law of reflection:</b><br />
If the reflecting surface is very smooth, the reflection of light that occurs is called specular or regular reflection. The laws of reflection are as follows:<br />
1. The incident ray, the reflected ray and the normal to the reflection surface at the point of the incidence lie in the same plane.<br />
2. The angle which the incident ray makes with the normal is equal to the angle which the reflected ray makes to the same normal.<br />

</body></html>';

$obj9 = '
<p style="font-family:serif;font-size:17px;color:green">
<i>The main objectives of this experiment are the following:</i><br /><br />
</p>
<ol>
    <li> <p style="font-family:serif;font-size:17px">
To find out how a wave travels from one material to another. </p></li>
    <li> <p style="font-family:serif;font-size:17px">
 To find out how a parallel polarized wave gets reflected and transmitted at boundary.  </p></li>
    <li> <p style="font-family:serif;font-size:17px">
 To find out how a perpendicular polarized wave gets reflected and transmitted at boundary. </p></li>
    <li> <p style="font-family:serif;font-size:17px">
 To calculate and observe the critical angle in both the cases. </p></li>
 </ol>
';

$manual9 = '
<p style="font-family:serif;font-size:17px">
Please note the following things from the video:<br /><br />
1. how to <b style="color:green">start</b> experiment <br>
2. how to move on to <b style="color:green">next</b> stage of experiment<br />
3. where to see the output values <br />
4. what are the main concepts in the experiment (shown in the yellow colored text boxes)<br /><br />
Use the video controls to <b>pause</b> the video, <b>replay</b> the video, etc.<br />
<br />
<a href="manual9.php" target="_blank"><i style="color:green"><u><ul><li>Show the Video Tutorial</li></ul></u></i></a>
</p>
';

$procedure9 = '<html><body> 
<p style="font-family:serif;font-size:17px">

This experiment consists of two stages and each stage will teach you a new concept.<br /><br />

The experiment was designed in a way, so that you can quickly change the parameters and observe the results. This makes you to have a more clear picture of the concepts.
<br /><br />
Start the experiment by pressing <i style="color:green">start</i> button<br /><br />

<ul>
<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 1</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">
<ol>
<li> <p style="font-family:serif;font-size:17px">In this experiment, you are going to learn about how a wave travels from one material to another. In the first stage, you are going to learn about how a parallel polarized wave gets reflected and transmitted at boundary.</li>
<li> <p style="font-family:serif;font-size:17px">The incident wave contains electric and magnetic fields (shown in red and yellow colors). Now, if you click on the screen, incident wave starts and hits the boundary (at the center of screen). Here you need to observe the direction of electric and magnetic fields in the reflectes wave and the refracted wave with respect to incident wave.</li>
<li> <p style="font-family:serif;font-size:17px">You can use the slider "change camera view" (at the bottom of window) to zoom in and zoom out. At the bottom of experiment window, you have slider for each parameter (like μ1, μ2, ε1, etc) So, using those parameters you can define the medium in which wave travels.</li>
<li> <p style="font-family:serif;font-size:17px">See the output parameters like Amplitude of reflected and refracted wave. Try to calculate critical angle (using snell\'s law) and cross check your answers. Do this with various values of parameters and write a report of your observations. After completing this, move on to the next stage by clicking on "Next" button provided at the top of the experiment window. </li>

</ol>
<br /><br />
</p>
</li>

<li><p style="font-family:serif;font-size:17px"><b><u style="color:green">STAGE 2</u></b>:<br /></p></li>
<p style="font-family:serif;font-size:17px">

<ol>
<li> <p style="font-family:serif;font-size:17px">This stage is not different from previous stage. In the previous stage you will learn about parallel polarization. In this stage, you will learn about perpendicular polarization.(Observe the change in planes of electric field and magnetic field) </li>
<li> <p style="font-family:serif;font-size:17px">Perform the experiment as you have done in stage 1, and write a report of your observations.</li>
<li> <p style="font-family:serif;font-size:17px">At any point of time, you can move on to the previous stage by clicking on "Back" button provided at the top of the experiment window. </li>
</ol>

';

$virExp9 = '

<p style="font-family:serif;font-size:17px">

<b><u style="color:#B0171F;">Pre-Quiz Questions</u>:</b></br></br></p>
<p style="font-family:serif;font-size:17px">
Test your Understanding on Plane Waves, by going through the following quiz:<br />
&nbsp;&nbsp;<a href="preQuiz9.php" target="_blank"><i style="color:green"><u><ul><li>Start the Quiz</li></ul></u></i></a>
</p><br /><br />

<p style="font-family:serif;font-size:17px">
<b><u style="color:#B0171F">Virtual Experiment</u>:</b><br />
Please make sure that you are going to perform experiment only after going through the following sections:<br /><br />
1. Video Tutorial<br />
2. Procedure<br />
3. Objectives<br />
</p>
<a href="ve_exp9.html"
onclick="window.open(\'ve_exp9.html\',
null,\'scrollbars=yes, width=\'  + (screen.availWidth)
+\',height=\' + (screen.availHeight));return false;"><br />
<p style="font-family:serif;font-size:17px">
<i style="color:green">&nbsp;&nbsp;&nbsp<u><ul><li>Start the Experiment</li></ul></u></i> 
 </p></a>
<!-- <object codetype="application/java" classid="java:crc.emt.demos.CoulombsLaw$MyApplet.class"  width="900" height="660" title="Electric field">
</object> -->';


$theory9 = '

<p style="font-family:serif;font-size:17px">

We consider the reflection of the plane wave on the lossless media. The general form of the uniform wave plane is <br />

<img src="images/ref/2.jpg" alt=""><br />

Where r is the radius vector and k is the wave number or the propagation vector and is always in the direction of the propagation of wave. The magnitude of k is related to "&omega;" according to the dispersion relation .<br />

<img src="images/ref/3.jpg" alt=""><br />

As E,H and k are mutually orthogonal, while E and H lies on the same plane.

<img src="images/ref/4.jpg" alt=""><br />
<img src="images/ref/5.jpg" alt=""><br />

Considering the reflection of the EM wave as shown in the figure above, both the incident and the  reflection ray are in medium 1 while the refracted wave is in  medium 2.<br />


<img src="images/ref/6.jpg" alt=""><br />

Since the tangential component of E must be; continuous at the: boundary z = 0.<br />

<img src="images/ref/7.jpg" alt=""><br />

The only way this boundary condition will be satisfied by the waves :<br />

<img src="images/ref/8.jpg" alt=""><br />

1 implies that the frequency is unchanged. Conditions 2 and 3 require that the tangential components of the propagation vectors be continuous. This means that the propagation vectors ki, kt, and kr must all lie in the plane of incidence. Thus, by conditions 2 and 3,<br />

<img src="images/ref/9.jpg" alt=""><br />

In case of loseless medium,<br />

<img src="images/ref/10.jpg" alt=""><br />

Thus, it is proved that angel of incidence is equal to angle of reflection.
Also, from the above equation, we can say that <br />

<img src="images/ref/11.jpg" alt=""><br />

or 

<img src="images/ref/12.jpg" alt=""><br />

This is called as snell\'s law where n1 and n2 are the refractive index of the medium 1 and 2 respectively. 
Two special cases are considered, one in which E is perpendicular to the plane of incidence and the other in which it is parallel to the plane of incidence.

<br /><br />
1) <b>Parallel Polarization</b> <br /><br />

In Parallel polarization E lies in the plane of incidence. In medium 1 <br />

<img src="images/ref/13.jpg" alt=""><br />

and in medium 2 the transmitted field is given by,

<img src="images/ref/14.jpg" alt=""><br />

As angle of incidence is equal to angle of reflection and tangential component of E and H are continous at boundary z=0, so <br />

<img src="images/ref/15.jpg" alt=""><br />

Expressing Ero and Eto in terms of Eio , we obtain <br />

<img src="images/ref/16.jpg" alt=""><br />

and <br />

<img src="images/ref/17.jpg" alt=""><br />

Thus, we can say that <br />

<img src="images/ref/18.jpg" alt=""><br />

Using simple trigonometric conversion, it can be shown that 

<img src="images/ref/19.jpg" alt=""><br />
<br />
Brewster angle <br />

<img src="images/ref/20.jpg" alt=""><br />

Solving the above equation with trigonometric manipulations, we will get the following result

<img src="images/ref/21.jpg" alt=""><br />


<br /><br />
2) <b>Perpendicular Polarization</b> <br /><br />

In this, E is perpendicular to the plane of incidence or H is parallel to the plane of incidence <br />

<img src="images/ref/22.jpg" alt=""><br />

while the transmitted field in medium 2 are given by :<br />

<img src="images/ref/23.jpg" alt=""><br />

In similar way as that of parallel polarization, we can derive other equations also<br />

<img src="images/ref/24.jpg" alt=""><br />

and <br />

<img src="images/ref/25.jpg" alt=""><br />

Fresnal\'s equation for the perpendicular polarization is 
<img src="images/ref/26.jpg" alt=""><br />

It can be easily shown that
<img src="images/ref/27.jpg" alt=""><br />

and
<img src="images/ref/28.jpg" alt=""><br />

';

$quiz9 = '
<html>
<head>
<font size="3">
<title>Quiz on Plane Waves</title>

<script>


//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
   numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);
   numCorrect += checkQuestionRadio( document.quiz.q6);
   numCorrect += checkQuestionRadio( document.quiz.q7);
   numCorrect += checkQuestionRadio( document.quiz.q8);
   numCorrect += checkQuestionRadio( document.quiz.q9);
   numCorrect += checkQuestionRadio( document.quiz.q10);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");
   highlightCorrectButton("correct6");
   highlightCorrectButton("correct7");
   highlightCorrectButton("correct8");
   highlightCorrectButton("correct9");
   highlightCorrectButton("correct10");

   //produce output in textarea.
   document.quiz.output.value +=
     "You got " + numCorrect + " out of 10 questions correct.\n" +
     "The correct answers are highlighted." 
}
</script>
</head>
<body>

<form name="quiz">
<ol>
<li><b>In perpendicular polarization, Electric field propogates perpendicular to the plane of </b><br>
   <span id="correct1"><input type="radio" name="q1" value="correct"> Incidence</span><br>
   <input type="radio" name="q1" value="wrong"> reflection  <br>
   <input type="radio" name="q1" value="wrong"> Both of the above  <br>
   <input type="radio" name="q1" value="wrong"> None of the above <br>
   
</li><br />
<hr><br />

<li><b>According to the snell\'s law, the product of the refractive index of the medium and ___ of the angle made with the normal are equal.</b><br>
   <span id="correct2"><input type="radio" name="q2" value="correct"> sin </span><br>
   <input type="radio" name="q2" value="wrong"> cosine<br>
   <input type="radio" name="q2" value="wrong"> tangent <br>
   <input type="radio" name="q2" value="wrong"> none of the above <br>
</li><br />
<hr><br />

<li><b>If the wave travelling in medium 1 is incident on medium 2 whose refractive index is more than the refractive index of medium 2, then in medium 2 the wave will</b><br>
   <span id="correct3"><input type="radio" name="q3" value="correct"> bend towards normal</span><br>
   <input type="radio" name="q3" value="wrong"> bend away from normal<br>
   <input type="radio" name="q3" value="wrong"> no diflection from its original path.<br>
   <input type="radio" name="q3" value="wrong"> none of the above<br>
</li><br />
<hr><br />

<li><b> If the ratio of refractive index of incident medium to the 2nd medium is 1, then what is the Brewster angle.  </b><br />
   <input type="radio" name="q4" value="wrong"> 60 <br>
   <input type="radio" name="q4" value="wrong"> 30 <br>
   <span id="correct4"><input type="radio" name="q4" value="correct"> 45 </span><br>
   <input type="radio" name="q4" value="wrong"> 90<br>   
</li><br />
<hr><br />

<li><b> If the direction of current in a straight current carrying wire is along the positive z axis, then the direction of the magnetic field induced is ______ when seen from positive z axis.</b><br>
   <input type="radio" name="q5" value="wrong"> less than 30 <br>
   <input type="radio" name="q5" value="wrong"> between 30 and 45<br>
   <span id="correct5"><input type="radio" name="q5" value="correct"> between 45 and 60 </span><br>
   <input type="radio" name="q5" value="wrong"> more than 60 <br>
</li><br />
<hr><br />

<li><b>A uniform plane wave in air with E= 10 cos(wt -4x-3z) ax V/m is incident on the dieletric slab with (z>=0). Which type of polarization it is ?</b><br>
   <input type="radio" name="q6" value="wrong"> Parallel polarization <br>
   <span id="correct6"><input type="radio" name="q6" value="correct"> Perpendicular polarization </span><br>
   <input type="radio" name="q6" value="wrong"> Insufficeint data <br>
   <input type="radio" name="q6" value="wrong"> None of the above<br>
</li><br />
<hr><br />

<li><b> If refractive index of medium 1 is 2 and that of medium 2 is 4, then what is the ratio of cosine of angle of incident and the angle of refraction </b><br>
   <input type="radio" name="q7" value="wrong"> 2 <br>
   <input type="radio" name="q7" value="wrong"> 1/2 <br>
   <span id="correct7"><input type="radio" name="q7" value="correct"> cannot be determined </span><br>
   <input type="radio" name="q7" value="wrong"> None of these<br>
</li><br />
<hr><br />

<li><b>If the wave travelling in medium 1 is incident on medium 2 whose refractive index is more than the refractive index of medium 2, then angle of incidence is________ than angle of refraction </b><br>
   <span id="correct8"><input type="radio" name="q8" value="correct"> greater</span><br>
   <input type="radio" name="q8" value="wrong"> lesser  <br>
   <input type="radio" name="q8" value="wrong"> same<br>
   <input type="radio" name="q8" value="wrong"> None <br>
   
</li><br />
<hr><br />

<li><b> Electric field propagates parallel to plane of incidence in</b><br>
   <span id="correct9"><input type="radio" name="q9" value="correct"> Parallel Polarization</span><br>
   <input type="radio" name="q9" value="wrong">Perpendicular Polarization <br>
<input type="radio" name="q9" value="wrong"> Both <br>
   <input type="radio" name="q9" value="wrong"> None of the above<br>
                                              </li><br />
<hr><br />

<li><b> Polarization is decided based on the direction of </b><br>
   <span id="correct10"><input type="radio" name="q10" value="correct"> Direction of electric field to plane of incidence </span><br>
<input type="radio" name="q10" value="wrong"> Direction of magnetic field to plane of incidence  <br>
   <input type="radio" name="q10" value="wrong"> Direction of propagation of wave <br>
   <input type="radio" name="q10" value="wrong"> None of the above <br>
</li><br />
<hr><br />

</ol>

<input type="button" onClick="checkQuiz()" value="check quiz">
<hr>
<textarea cols="80" rows="10" name="output"></textarea>
</form>
</font>
</body>


</html>';

$ref9 = '
<ol>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Physics for scientists and Engineers with
Modern Physics," New Jersey: Pearson Prentice Hall, 2009 by <i>Douglas C. Giancoli</i></p>.
</li>
<li>
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Elements of Electromagnetics,"  New York:
Oxford University Press, 2006 by <i> Mattew.N.O.Sadiku</i></p>
</p>
</li>
 <li> 
<p style="font-family:serif;font-size:17px">
&nbsp;&nbsp;"Engineering Electromagnetics," New Delhi:  McGraw Hill, 2006.
by  <i>William H. Hayt, Jr., John A. Buck</i>.  </li>
<br /><br />
</ol>
<p style="font-family:serif;font-size:17px">
<b><i><u>WEB REFERENCES</u></i></b>: <br /><br>
<a href="http://en.wikipedia.org/wiki/Doppler_effect">http://en.wikipedia.org/wiki/Doppler_effect<br></a>
<a href="http://www.radartutorial.eu/01.basics/rb04.en.html">http://www.radartutorial.eu/01.basics/rb04.en.html<br></a>
</p>
';

$feedback9 = '<html><body><br /><br /><br /><br /><p style="color:green"> <p style="font-size:16px"> <p style="font-size:16px; color:green"> To be Updated soon ...    <br /></body></html>';


$intro9 = mysql_real_escape_string($intro9);
$obj9 = mysql_real_escape_string($obj9);
$manual9 = mysql_real_escape_string($manual9);
$procedure9 = mysql_real_escape_string($procedure9);
$virExp9 = mysql_real_escape_string($virExp9);
$theory9 = mysql_real_escape_string($theory9);
$quiz9 = mysql_real_escape_string($quiz9);
$ref9 = mysql_real_escape_string($ref9);
$feedback9 = mysql_real_escape_string($feedback9);


mysql_query("insert into content values
		(1,'C001','T001','CN001','P001','Introduction','Sushanth Poojary','$intro1','1'),
		(2,'C001','T002','CN001','P001','Objective','Sushanth Poojary','$obj1','1'),
		(3,'C001','T003','CN001','P001','Manual','Sushanth Poojary','$manual1','1'),
		(4,'C001','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure1','1'),
		(5,'C001','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp1','1'),
		(6,'C001','T006','CN001','P001','Theory','Sushanth Poojary','$theory1','1'),
		(7,'C001','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz1','1'),
		(8,'C001','T008','CN001','P001','References','Sushanth Poojary','$ref1','1'),
		(1119,'C001','T009','CN001','P001','Feedback','Sushanth Poojary','$feedback1','1')
");

mysql_query("insert into content values
		(9,'C002','T001','CN001','P001','Introduction','Sushanth Poojary','$intro2','1'),
		(10,'C002','T002','CN001','P001','Objective','Sushanth Poojary','$obj2','1'),
		(11,'C002','T003','CN001','P001','Manual','Sushanth Poojary','$manual2','1'),
		(12,'C002','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure2','1'),
		(13,'C002','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp2','1'),
		(14,'C002','T006','CN001','P001','Theory','Sushanth Poojary','$theory2','1'),
		(15,'C002','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz2','1'),
		(16,'C002','T008','CN001','P001','References','Sushanth Poojary','$ref2','1'),
		(1129,'C002','T009','CN001','P001','Feedback','Sushanth Poojary','$feedback1','1')
");
mysql_query("insert into content values
		(2139,'C003','T001','CN001','P001','Introduction','Sushanth Poojary','$intro10','1'),
		(2110,'C003','T002','CN001','P001','Objective','Sushanth Poojary','$obj10','1'),
		(2111,'C003','T003','CN001','P001','Manual','Sushanth Poojary','$manual10','1'),
		(2112,'C003','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure10','1'),
		(2113,'C003','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp10','1'),
		(2114,'C003','T006','CN001','P001','Theory','Sushanth Poojary','$theory10','1'),
		(2115,'C003','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz10','1'),
		(2116,'C003','T008','CN001','P001','References','Sushanth Poojary','$ref10','1'),
		(12129,'C003','T009','CN001','P001','Feedback','Sushanth Poojary','$feedback1','1')
");

mysql_query("insert into content values
		(17,'C004','T001','CN001','P001','Introduction','Sushanth Poojary','$intro3','1'),
		(18,'C004','T002','CN001','P001','Objective','Sushanth Poojary','$obj3','1'),
		(19,'C004','T003','CN001','P001','Manual','Sushanth Poojary','$manual3','1'),
		(20,'C004','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure3','1'),
		(21,'C004','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp3','1'),
		(22,'C004','T006','CN001','P001','Theory','Sushanth Poojary','$theory3','1'),
		(23,'C004','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz3','1'),
		(24,'C004','T008','CN001','P001','References','Sushanth Poojary','$ref3','1'),
		(1139,'C004','T009','CN001','P001','Feedback','Sushanth Poojary','$feedback1','1')
");


mysql_query("insert into content values
		(25,'C005','T001','CN001','P001','Introduction','Sushanth Poojary','$intro5','1'),
		(26,'C005','T002','CN001','P001','Objective','Sushanth Poojary','$obj5','1'),
		(27,'C005','T003','CN001','P001','Manual','Sushanth Poojary','$manual5','1'),
		(28,'C005','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure5','1'),
		(29,'C005','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp5','1'),
		(30,'C005','T006','CN001','P001','Theory','Sushanth Poojary','$theory5','1'),
		(31,'C005','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz5','1'),
		(32,'C005','T008','CN001','P001','References','Sushanth Poojary','$ref5','1'),
		(33,'C005','T009','CN001','P001','Feedback','Sushanth Poojary','$feedback1','1')
");



mysql_query("insert into content values
		(34,'C006','T001','CN001','P001','Introduction','Sushanth Poojary','$intro4','1'),
		(35,'C006','T002','CN001','P001','Objective','Sushanth Poojary','$obj4','1'),
		(36,'C006','T003','CN001','P001','Manual','Sushanth Poojary','$manual4','1'),
		(37,'C006','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure4','1'),
		(38,'C006','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp4','1'),
		(39,'C006','T006','CN001','P001','Theory','Sushanth Poojary','$theory4','1'),
		(40,'C006','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz4','1'),
		(41,'C006','T008','CN001','P001','References','Sushanth Poojary','$ref4','1'),
		(42,'C006','T009','CN001','P001','Feedback','Sushanth Poojary','$feedback1','1')
");



mysql_query("insert into content values
		(43,'C007','T001','CN001','P001','Introduction','Sushanth Poojary','$intro6','1'),
		(44,'C007','T002','CN001','P001','Objective','Sushanth Poojary','$obj6','1'),
		(45,'C007','T003','CN001','P001','Manual','Sushanth Poojary','$manual6','1'),
		(46,'C007','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure6','1'),
		(47,'C007','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp6','1'),
		(48,'C007','T006','CN001','P001','Theory','Sushanth Poojary','$theory6','1'),
		(49,'C007','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz6','1'),
		(50,'C007','T008','CN001','P001','References','Sushanth Poojary','$ref6','1'),
		(51,'C007','T009','CN001','P001','Feedback','Sushanth Poojary','$feedback1','1')
");
mysql_query("insert into content values
		(52,'C008','T001','CN001','P001','Introduction','Sushanth Poojary','$intro7','1'),
		(53,'C008','T002','CN001','P001','Objective','Sushanth Poojary','$obj7','1'),
		(54,'C008','T003','CN001','P001','Manual','Sushanth Poojary','$manual7','1'),
		(55,'C008','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure7','1'),
		(56,'C008','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp7','1'),
		(57,'C008','T006','CN001','P001','Theory','Sushanth Poojary','$theory7','1'),
		(58,'C008','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz7','1'),
		(59,'C008','T008','CN001','P001','References','Sushanth Poojary','$ref7','1'),
		(60,'C008','T009','CN001','P001','Feedback','Sushanth Poojary','$feedback1','1')
");
mysql_query("insert into content values
		(61,'C009','T001','CN001','P001','Introduction','Sushanth Poojary','$intro8','1'),
		(62,'C009','T002','CN001','P001','Objective','Sushanth Poojary','$obj8','1'),
		(63,'C009','T003','CN001','P001','Manual','Sushanth Poojary','$manual8','1'),
		(64,'C009','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure8','1'),
		(65,'C009','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp8','1'),
		(66,'C009','T006','CN001','P001','Theory','Sushanth Poojary','$theory8','1'),
		(67,'C009','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz8','1'),
		(68,'C009','T008','CN001','P001','References','Sushanth Poojary','$ref8','1'),
		(69,'C009','T009','CN001','P001','Feedback','Sushanth Poojary','$feedback1','1')
");

mysql_query("insert into content values
		(70,'C010','T001','CN001','P001','Introduction','Sushanth Poojary','$intro9','1'),
		(71,'C010','T002','CN001','P001','Objective','Sushanth Poojary','$obj9','1'),
		(72,'C010','T003','CN001','P001','Manual','Sushanth Poojary','$manual9','1'),
		(73,'C010','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure9','1'),
		(74,'C010','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp9','1'),
		(75,'C010','T006','CN001','P001','Theory','Sushanth Poojary','$theory9','1'),
		(76,'C010','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz9','1'),
		(77,'C010','T008','CN001','P001','References','Sushanth Poojary','$ref9','1'),
		(78,'C010','T009','CN001','P001','Feedback','Sushanth Poojary','$feedback1','1')
");

echo "connected to database<br />"
?>
