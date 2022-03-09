# PHP-Class-and-Instance-test-solution
<b>Objective</b>:<br>
<p>In this challenge, we're going to learn about the difference between a class and an instance; because this is an Object Oriented concept, it's only enabled in certain languages. Check out the Tutorial tab for learning materials and an instructional video!
</p>
<b>Task:</b>
<p>Write a Person class with an instance variable, , and a constructor that takes an integer, , as a parameter. The constructor must assign  to  after confirming the argument passed as  is not negative; if a negative argument is passed as , the constructor should set  to  and print Age is not valid, setting age to 0.. In addition, you must write the following instance methods:</p>

yearPasses() should increase the  instance variable by .<br>
amIOld() should perform the following conditional actions:<br>
If , print You are young..<br>
If  and , print You are a teenager..<br>
Otherwise, print You are old..<br>
<p>To help you learn by example and complete this challenge, much of the code is provided for you, but you'll be writing everything in the future. The code that creates each instance of your Person class is in the main method. Don't worry if you don't understand it all quite yet!</p>

<b><i>Note: Do not remove or alter the stub code in the editor.</i></b><br><br>

<b>Input Format</b><br><br>
4<br>
-1<br>
10<br>
16<br>
18<br>
Input is handled for you by the stub code in the editor.<br><br>

The first line contains an integer,  (the number of test cases), and the  subsequent lines each contain an integer denoting the  of a Person instance.<br><br>

<b>Constraints</b><br><br>
<i>1 <= T >= 4</i> <br>
<i>-5 > T <= 30</i> <br><br>
  
  <b>Output Format</b><br><br>
Age is not valid, setting age to 0.<br>
You are young.<br>
You are young.<br><br>

You are young.<br>
You are a teenager.<br><br>

You are a teenager.<br>
You are old.<br><br>

You are old.<br>
You are old.<br><br>
<p>Complete the method definitions provided in the editor so they meet the specifications outlined above; the code to test your work is already in the editor. If your methods are implemented correctly, each test case will print  or  lines (depending on whether or not a valid  was passed to the constructor).</p>
