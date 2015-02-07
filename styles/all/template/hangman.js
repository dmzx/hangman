
var alpha=new Array();
var alpha_index=0;

var bravo=new Array();
var bravo_index=0;

var running=0;
var failnum=0;
var advising=0;

var words = new Array("Do or Die",
					 "To love and win is the best thing and to love and loose the next best",
					 "There is no I in Teamwork",
					 "Where there is a will there is a way",
					 "He who sows reaps",
					 "Time and tide wait for none",
					 "Rome was not built in a day",
					 "Early bird catches the worm",
					 "Hunger drives wolf out of woods",
					 "A stitch in time saves nine",
					 "Actions speak louder than words",
					 "Idleness is a fools desire",
					 "Well begun is half done",
					 "An eye for eye makes the whole world blind",
					 "A bird in hand is worth two in bush",
					 "Rolling stone gathers no moss",
					 "Prevention is better than cure",
					 "Never complain and never explain",
					 "A ship in harbour is safe but that is not what ships are built for",
					 "Fear not for the future weep not for the past",
					 "Man is a political animal",
					 "Answer only yourself and God",
					 "A picture is worth thousand words",
					 "Art is long life is short",
					 "Nature is the art of God",
					 "To err is human To forgive is divine",
					 "Health is wealth",
					 "Who dares wins",
					 "Loving parents have caring children",
					 "Hope for the best and prepare for the worst",
					 "All that glitters is not gold",
					 "Virtue has its own reward",
					 "Honesty is the best policy",
					 "Speech is silver Silence is gold",
					 "Empty vessels make more noise",
					 "Child is father of the man",
					 "It takes a village to raise a child",
					 "Cowards die often",
					 "Goal of all life is death",
					 "United we stand divided we fall",
					 "Fear breeds fear",
					 "Many hands make light work",
					 "In the middle of difficulty lies the opportunity",
					 "Either find a way or make one",
					 "Forgive your enemies but never forget their names",
					 "All art is immortal",
					 "Facts are many but truth is one",
					 "Birds of the same feather flock together",
					 "Happy family is an earlier heaven",
					 "Pen is mightier than sword",
					 "Marriages are made in heaven",
					 "There is no good war or bad peace",
					 "Penny wise Pound foolish",
					 "Freedom is from within",
					 "Friends are sunshine of life",
					 "Beauty is Gods gift",
					 "Live and let live",
					 "Gratitude is the sign of noble souls",
					 "Busy bee has no time for sorrow",
					 "Journey of a thousand miles begins with a single step",
					 "Think Big",
					 "History belongs to the winner",
					 "Make hay while the sun shines",
					 "Hope is a waking dream",
					 "Try try till you succeed",
					 "Necessity is the mother of invention",
					 "Truth exists lies are invented",
					 "Do not count your chickens before they are hatched",
					 "Great minds have purposes others have wishes",
					 "Love is a burning desire",
					 "Slow and steady wins the race",
					 "Silence is the source of great strength",
					 "Honesty is the best policy",
					 "Army marches on its stomach",
					 "Money is a good servant but a bad master",
					 "Student of all master of none",
					 "Unity is Strength",
					 "Imagination gallops judgment merely walks",
					 "Life is a Mystery",
					 "Variety is the spice of life",
					 "Love is blind",
					 "Wise men think alike",
					 "Failing to plan is planning to fail",
					 "Bed is the poor mans opera",
					 "One in thousand becomes a leader the rest follow women");



function pick()
{
	var choice="";
	var blank=0;

	for(i=0; i<words[index].length; i++)
	{
		t=0;
		for(j=0; j<=alpha_index; j++) 
			if(words[index].charAt(i)==alpha[j] || words[index].charAt(i)==alpha[j].toLowerCase()) t=1;
   
		if(t) choice+=words[index].charAt(i)+" ";
		else 
		{
		  if(words[index].charAt(i)==' ')
		  {
		  	choice += "  ";
		  }
		  else
		  {
		        choice+="_ ";
			blank=1;
		  }
		}
	}
	
	document.frm.word.value=choice;
    
	if(!blank)
	{
		alert('You Win!');
		document.frm.score.value++;
		running=0;
		new_word(document.frm);
	}
}


function new_word(form)
{
	if(!running)
	{
		running=1;
		failnum=0;
		form.lives.value=failnum;
		form.tried.value="";
		form.correct.value="";    
		form.word.value="";
		index=Math.round(Math.random()*10000) % 100;
		alpha[0]=words[index].charAt(0);
		alpha[1]=words[index].charAt(words[index].length-1);
		alpha_index=1;
		bravo[0]=words[index].charAt(0);
		bravo[1]=words[index].charAt(words[index].length-1);
		bravo_index=1;
		pick();
	}
	else
		advise("Quote already in play!");
		
	document.frm.res.disabled=false;
	document.frm.hm.src="../ext/dmzx/hangman/styles/all/theme/images/hmstart3.gif";
  
	for(var i=65; i<=90; i++)
		document.getElementById(String.fromCharCode(i)).style.backgroundColor='#D3D3D3';
}

function restart(form)
{
	running=1;
	failnum=0;
	form.lives.value=failnum;
	form.tried.value="";
	form.correct.value="";    
	form.word.value="";
	index=Math.round(Math.random()*10000) % 100;
	alpha[0]=words[index].charAt(0);
	alpha[1]=words[index].charAt(words[index].length-1);
	alpha_index=1;
	bravo[0]=words[index].charAt(0);
	bravo[1]=words[index].charAt(words[index].length-1);
	bravo_index=1;
	pick();
	document.frm.hm.src="../ext/dmzx/hangman/styles/all/theme/images/hmstart3.gif";    
    
	for(var i=65; i<=90; i++)
		document.getElementById(String.fromCharCode(i)).style.backgroundColor='#D3D3D3';
}

function seek(letter)
{
	if(!running)
		alert("Click 'New Quote' to start !");
	else
	{
		t=0;
		for(i=0; i<=bravo_index; i++)
			if (bravo[i]==letter || bravo[i]==letter.toLowerCase()) t=1;

		if(!t) 
		{
			bravo_index++;
			bravo[bravo_index]=letter;
	    
			for(i=0;i<words[index].length;i++)
				if(words[index].charAt(i)==letter || words[index].charAt(i)==letter.toLowerCase()) t=1;
		
			if(t)
			{
				alpha_index++;
				alpha[alpha_index]=letter;
				document.frm.correct.value+=letter+" ";	      
		      		document.getElementById(letter).style.backgroundColor='#FFF8DC';	 
			}
			else
			{
				failnum++;
				document.frm.tried.value+=letter+" ";	    
				eval("document.hm.src=\"../ext/dmzx/hangman/styles/all/theme/images/hm" + failnum + ".gif\"");
		      		document.getElementById(letter).style.backgroundColor='#CCD8FF';
			}
			
			document.frm.lives.value=failnum;

			if(failnum==10) 
			{
				alert('You lose - Try again!');
				document.frm.score.value--;
				running=0;
				new_word(document.frm);
			}
			else pick();
		}
		else
			advise("Letter "+letter+" is already used!");
	  }
  
}

function advise(msg)
{
	if(!advising)
	{
		advising=-1;
		savetext=document.frm.correct.value;  
		document.frm.correct.value=msg;
		window.setTimeout("document.frm.correct.value=savetext; advising=0;",500);
	}
}

