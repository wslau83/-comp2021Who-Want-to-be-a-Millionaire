#!/usr/bin/env php
<?php
$question = array(
"Question 1. What is the full name of HKUST?",
"Question 2. How many LGs are there in the campus?",
"Question 3. Which of the schools does not belong to HKUST?",
"Question 4. How many storeys are there in the Library?",
"Question 5. What is the location of Golden Rice Bowl?",
"Question 6. Where is the location of Barn D?",
"Question 7. What is my name?",
"Question 8. Where should I go if I want to go to Clear Water Bay by bus?",
"Question 9. What is the official name of the sundial located at the entrance?",
"Question 10. How many lectures theatres are there in campus?",
"Question 11. What is the year of establishment of HKUST?",
"Question 12. What is the name of the Student Association of UG HALL I?",
"Question 13. Which of the facilities is not included in the Atrium?",
"Question 14. What is the approximate amount of print volumes in the Library?",
"Question 15. What is the full name of this course COMP2021?");

$choiceA = array(
"Hong Kong University of Stress and Tension",
"3",
"School of Business and Management",
"4",
"LG1",
"Lee Shau Kee Business Building",
"Lee Shau Kee",
"North Gate",
"Turkey",
"10",
"1998",
"House One",
"Hair Salon",
"940000",
"Unix Programming");

$choiceB = array(
"Hong Kong University of So and That",
"4",
"School of Laws",
"5",
"LG4",
"Tang Shiu Kin Computational Laboratory",
"Lo Ka Chung",
"East Gate",
"Redbird",
"8",
"1995",
"Vista",
"Lift 15",
"710000",
"Unix and Script Programming");

$choiceC = array(
"Hong Kong University of Science and Technology",
"6",
"School of Humanities and Social Science",
"6",
"LG5",
"Room 4402-4404",
"Cheng Yu Tung",
"South Gate",
"Phoenix",
"12",
"1991",
"Endeavour",
"Souvenir Shop",
"620000",
"Unix and Perl Programming");
					
$choiceD = array(
"Hong Kong University of Single and Toxic",
"7",
"School of Engineering",
"7",
"LG7",
"Room 4578-4580",
"Chan Fan Cheong",
"West Gate",
"Chicken",
"9",
"1989",
"Glacier",
"Lecture Theatre K",
"830000",
"Younext and Shecrip Programming");
					
$answer = array("C","D","B","B","D","A","D","A","B","A","C","A","D","B","B");
$hint1 = 1;
$hint2 = 1;
$hint3 = 1;
$GPAint = 0; 
$GPAdp = 0;
$correctnum = 0;
print"\n\n";
print"Welcome to USTillionaire!\n";
for($q_no = 0; $q_no <= 14; $q_no++)
{
	print"Current GPA: $GPAint.$GPAdp\n";
	if($q_no == 14)
	{
	print"Here is the question for GPA 4.3: \n";
	}
	else if($GPAdp + 3 < 10)
	{
	$dp = $GPAdp + 3;
	print"Here is the question for GPA $GPAint.$dp: \n";
	}
	else
	{
	print"Here is the question for GPA ";
	$int = $GPAint + 1;
	print"$int.";
	$dp = $GPAdp + 3 - 10;
	print"$dp: \n";
	}
	print"$question[$q_no]\n";
	print"A: $choiceA[$q_no]\n";
	print"B: $choiceB[$q_no]\n";
	print"C: $choiceC[$q_no]\n";
	print"D: $choiceD[$q_no]\n";
	
	$hint_available =($hint1+$hint2+$hint3);
	if($hint_available)
	{
	if($hint_available > 1)
	{print"You will have these hints to help you: \n";}
	if($hint_available == 1)
	{print"You will have this hint to help you: \n";}
	if($hint1)
	{print"1. Phone your friends\t";}
	if($hint2)
	{print"2. 50:50\t";}	
	if($hint3)
	{print"3. Ask audiences\t";}
	print"\n";
	print"*Remember you can use 1 hint only for a single question.\n";
	}
	else
	{
	print"No hints left!\n";
	}
	
	print"\nPlease choose your answer or hint number(Submit Q to give up): ";
	$input = trim(fgets(STDIN));
	if($input == "Q")
	{break;}
	while(($input != "A")&&($input != "B")&&($input != "C")&&($input != "D")&&($input != "1")&&($input != "2")&&($input != "3")&&($input != "Q"))
	{print"Please enter a valid choice.\n";
	 print"\nPlease choose your answer or hint number(Submit Q to give up): ";
	 $input = trim(fgets(STDIN));
	}
	if($input == "Q")
	{break;}
	 
	 
	while((!$hint1&&($input == "1"))||(!$hint2&&($input == "2"))||(!$hint3&&($input == "3")))
	{print"Sorry, the ";
	if($input == "1"){print"first ";}
	if($input == "2"){print"second ";}		
	if($input == "3"){print"third ";}
	print"hint has been used.\n";
    print"\nPlease choose your answer or hint number(Submit Q to give up): ";
	$input = trim(fgets(STDIN));
	}
	if($input == "Q")
	{break;}
	
	if(($input == "A")||($input == "B")||($input == "C")||($input == "D"))
	{
		$correctans = $answer[$q_no];
		if($input != $correctans)
		{break;} 
		else 
		{
		if($correctnum != 14)
		{
		print"Congratulations! You're correct!\n"; 
		print"Let's move onto the next question.\n";
		print"\n\n\n";
		$GPAdp += 3;	
		if($GPAdp > 10)
		{
		$GPAint += 1; 
		$GPAdp -= 10;
		}
		$correctnum++;
		continue;
		}
		else
		{
		$correctnum++;
		continue;
		}
		}
	}	
	
	if(($input == "1"))
	{
		print"\n\n";
		print"**Phone start**\n";
		print"Your friend: \"Hey, I think the answer is ";
		$random_prob = rand(30,100);
		$choice = array("A","B","C","D");
		if($random_prob > 50)
		{
		print"$answer[$q_no].\n";
		print"You: \"How are you sure about that?\"\n";
		print"Your friend: \"I am ";
		$random2=rand(50,100);
		print"$random2";
		}
		else
		{
		$pos = 0;
		switch($answer[$q_no])
		{
			case "B": $pos = 1; break;
			case "C": $pos = 2; break;
			case "D": $pos = 3; break;
		}
		array_splice($choice,$pos,1);
		$random = rand(0,count($choice)-1);
		print"$choice[$random].\n";
		print"You: \"How are you sure about that?\"\n";
		print"Your friend: \"I am ";
		$random2=rand(0,50);
		print"$random2";
		}
		print"% sure about that.\" \n";
		print"**Phone end**\n";
		$hint1=0;
		print"\n";
		if(!answering($answer,$correctnum))
		{break;}
		else
		{$GPAdp += 3;
		if($GPAdp > 10){$GPAint += 1; $GPAdp -= 10;}
		$correctnum++; 
		continue;}
	}
		
	if(($input == "2"))
	{
		print"\n\n";
		print"There are two possible answer left:\n";
		$choice = array("A","B","C","D");
		if($answer[$q_no] == "A")
		{
		print"A: $choiceA[$q_no]\n";
		array_splice($choice,0,1);
		$random = rand(0,count($choice)-1);
		$random_choice = $choice[$random];
		switch($random_choice)
		{
			case "B": print"B: $choiceB[$q_no]\n"; break;
			case "C": print"C: $choiceC[$q_no]\n"; break;
			case "D": print"D: $choiceD[$q_no]\n"; break;
		}
		}
		if($answer[$q_no] == "B")
		{
		array_splice($choice,1,1);
		$random = rand(0,count($choice)-1);
		$random_choice = $choice[$random];
		switch($random_choice)
		{
			case "A": print"A: $choiceA[$q_no]\n"; print"B: $choiceB[$q_no]\n"; break;
			case "C": print"B: $choiceB[$q_no]\n"; print"C: $choiceC[$q_no]\n"; break;
			case "D": print"B: $choiceB[$q_no]\n"; print"D: $choiceD[$q_no]\n"; break;
		}
		}
		if($answer[$q_no] == "C")
		{
		array_splice($choice,2,1);
		$random = rand(0,count($choice)-1);
		$random_choice = $choice[$random];
		switch($random_choice)
		{
			case "A": print"A: $choiceA[$q_no]\n"; print"C: $choiceC[$q_no]\n"; break;
			case "B": print"B: $choiceB[$q_no]\n"; print"C: $choiceC[$q_no]\n"; break;
			case "D": print"C: $choiceC[$q_no]\n"; print"D: $choiceD[$q_no]\n"; break;
		}
		}
		if($answer[$q_no] == "D")
		{
		array_splice($choice,3,1);
		$random = rand(0,count($choice)-1);
		$random_choice = $choice[$random];
		switch($random_choice)
		{
			case "A": print"A: $choiceA[$q_no]\n"; break;
			case "B": print"B: $choiceB[$q_no]\n"; break;
			case "C": print"C: $choiceC[$q_no]\n"; break;
		}
		print"D: $choiceD[$q_no]\n";
		}
		$hint2=0;
		print"\n";
		if(!answering($answer,$correctnum))
		{break;}
		else
		{$GPAdp += 3;
		if($GPAdp > 10){$GPAint += 1; $GPAdp -= 10;}
		$correctnum++;
		continue;}
	}
		
	if(($input == "3"))
	{
		print"\n\n";
		print"According to the statistics from the results of the voting system, \n";
		print"the audiences think the answer would be: \n";
		$ans_prob = 50+rand(0,30);
		$notans1_prob = round((100-$ans_prob)*lcg_value());
		$notans2_prob = round((100-$ans_prob-$notans1_prob)*lcg_value());
		$notans3_prob = 100-$ans_prob-$notans1_prob-$notans2_prob;
		$probs = array($notans1_prob,$notans2_prob,$notans3_prob);
		
		print"A: $choiceA[$q_no] ";
		if($answer[$q_no] == "A")
		{
		print"$ans_prob%\n";
		}
		else
		{
		$random3=rand(0,count($probs)-1);
		$notanswer_prob=$probs[$random3];
		print"$notanswer_prob%\n";
		array_splice($probs,$random3,1);
		}
		
		print"B: $choiceB[$q_no] ";
		if($answer[$q_no] == "B")
		{
		print"$ans_prob%\n";
		}
		else
		{
		$random3=rand(0,count($probs)-1);
		$notanswer_prob=$probs[$random3];
		print"$notanswer_prob%\n";
		array_splice($probs,$random3,1);
		}
		
		print"C: $choiceC[$q_no] ";
		if($answer[$q_no]=="C")
		{
		print"$ans_prob%\n";
		}
		else
		{
		$random3=rand(0,count($probs)-1);
		$notanswer_prob=$probs[$random3];
		print"$notanswer_prob%\n";
		array_splice($probs,$random3,1);
		}
		

		print"D: $choiceD[$q_no] ";
		if($answer[$q_no]=="D")
		{
		print"$ans_prob%\n";
		}
		else
		{
		$random3=rand(0,count($probs)-1);
		$notanswer_prob=$probs[$random3];
		print"$notanswer_prob%\n";
		array_splice($probs,$random3,1);
		}
		
		$hint3=0;
		print"\n";
		if(!answering($answer,$correctnum))
		{break;}
		else
		{$GPAdp += 3;
		if($GPAdp > 10){$GPAint += 1; $GPAdp -= 10;}
		$correctnum++;
		continue;}
	}
}
if($correctnum != 15)
{
print"\n\n!!!!!!!!!!!!!!!!!!!!!!!!!GAME OVER!!!!!!!!!!!!!!!!!!!!!!!!!\n";
print"The answer should be $answer[$correctnum]\n";
print"You have answered $correctnum ";
if($correctnum == 0||$correctnum == 1){print"question";}
else{print"questions";}
print" correctly\n";
print"You have finally got GPA $GPAint.$GPAdp \n";
print"\n\n";
}
else
{
print"\n\n!!!!!!!!!!!!!!!!!!!!!!!!!CONGRATULATIONS!!!!!!!!!!!!!!!!!!!!!!!!!\n";
print"You have answered all questions correctly\n";
print"You have finally got GPA 4.3 \n";
print"\n\n";
}

function answering($answer,$correctnum)
{
		print"Please choose your answer(Submit A-D to answer or Q to exit): ";
		$input = trim(fgets(STDIN));
		if($input == "Q")
		{return 0;}
		while(($input != "A")&&($input != "B")&&($input != "C")&&($input != "D")&&($input != "Q"))
		{print"Please enter a valid choice.\n";
		print"\nPlease choose your answer or hint number(Submit Q to give up): ";
		$input = trim(fgets(STDIN));
		}
		if($input == "Q")
		{return 0;}
		$correctans = $answer[$correctnum];
		if($input != $correctans)
		{return 0;} 
		else 
		{
		if($correctnum != 14)
		{
		print"Congratulations! You're correct!\n"; 
		print"Let's move onto the next question.\n";
		print"\n\n\n";
		return 1;
		}
		else
		{print"\n\n\n"; return 1;}
		}
}
?>