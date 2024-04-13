/*
    JavaScript for navbar 
    Created By: Jett Rogers
    4/12/2024
*/


//Function to display only home page
function homePage(){
    document.getElementById('HomePage').style.display='block';//Selects Home Page
    document.getElementById('Content1').style.display='none';
    document.getElementById('Content2').style.display='none';
    document.getElementById('Content3').style.display='none';
    document.getElementById('About Us').style.display='none';
}

//Function to display only Content1 page
function content1(){
    document.getElementById('HomePage').style.display='none';
    document.getElementById('Content1').style.display='block';//Selects Content 1 Page
    document.getElementById('Content2').style.display='none';
    document.getElementById('Content3').style.display='none';
    document.getElementById('About Us').style.display='none';
}

//Function to display only Content2 page
function content2(){
    document.getElementById('HomePage').style.display='none';
    document.getElementById('Content1').style.display='none';
    document.getElementById('Content2').style.display='block';//Selects Content 2 Page
    document.getElementById('Content3').style.display='none';
    document.getElementById('About Us').style.display='none';
}

//Function to display only Content3 page
function content3(){
    document.getElementById('HomePage').style.display='none';
    document.getElementById('Content1').style.display='none';
    document.getElementById('Content2').style.display='none';
    document.getElementById('Content3').style.display='block';//Selects Content 3 Page
    document.getElementById('About Us').style.display='none';
}

//Function to display only About Us page
function aboutUs(){
    document.getElementById('HomePage').style.display='none';
    document.getElementById('Content1').style.display='none';
    document.getElementById('Content2').style.display='none';
    document.getElementById('Content3').style.display='none';
    document.getElementById('About Us').style.display='block';//Selects About Us Page
}

homePage();