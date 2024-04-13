/*
    JavaScript for navbar 
    Created By: Jett Rogers
    4/12/2024
*/


//Function to display only home page
function homePageNav()
{
    document.getElementById('HomePage').style.display='block';//Selects Home Page
    document.getElementById('Hottest Deals').style.display='none';
    document.getElementById('Comic Books').style.display='none';
    document.getElementById('Games').style.display='none';
	document.getElementById('Contact Us').style.display='none';
    document.getElementById('About Us').style.display='none';
}

//Function to display only Content1 page
function dealsNav()
{
    document.getElementById('HomePage').style.display='none';
    document.getElementById('Hottest Deals').style.display='block';//Selects Hottest Deals Page
    document.getElementById('Comic Books').style.display='none';
    document.getElementById('Games').style.display='none';
	document.getElementById('Contact Us').style.display='none';
    document.getElementById('About Us').style.display='none';
}

//Function to display only Content2 page
function booksNav()
{
    document.getElementById('HomePage').style.display='none';
    document.getElementById('Hottest Deals').style.display='none';
    document.getElementById('Comic Books').style.display='block';//Selects Comic Books Page
    document.getElementById('Games').style.display='none';
	document.getElementById('Contact Us').style.display='none';
    document.getElementById('About Us').style.display='none';
}

//Function to display only Content3 page
function gamesNav()
{
    document.getElementById('HomePage').style.display='none';
    document.getElementById('Hottest Deals').style.display='none';
    document.getElementById('Comic Books').style.display='none';
    document.getElementById('Games').style.display='block';//Selects Games Page
	document.getElementById('Contact Us').style.display='none';
    document.getElementById('About Us').style.display='none';
}

//Function to display only Contact Us page
function contactUs()
{
	document.getElementById('HomePage').style.display='none';
    document.getElementById('Hottest Deals').style.display='none';
    document.getElementById('Comic Books').style.display='none';
    document.getElementById('Games').style.display='none';
	document.getElementById('Contact Us').style.display='block';//Selects Contact Us Page
    document.getElementById('About Us').style.display='none';
}

//Function to display only About Us page
function aboutUs()
{
    document.getElementById('HomePage').style.display='none';
    document.getElementById('Hottest Deals').style.display='none';
    document.getElementById('Comic Books').style.display='none';
    document.getElementById('Games').style.display='none';
	document.getElementById('Contact Us').style.display='none';
    document.getElementById('About Us').style.display='block';//Selects About Us Page
}

homePage();