

//import React and ReactDOM libraries (libraries to show component on the screen)
import React from 'react';
import ReactDOm from 'react-dom/client';
import App from "./App"

//get reference to the div with ID root (tell react where to render our content)
const el = document.getElementById("root");

//tell react to take control of that element 
const root = ReactDOm.createRoot(el);

//create component (a function that returns jsx)
function App (){
    return <h1>Hi There!</h1>

}

//show component on the screen
root.render(<App/>)

//can add variables in jsx through {name} name ="doug", <h1>{name}</h1>
//props/properties are like html element attributes <input type="input" min={5}  
//you can pass arrays, objects through props as well list={[1,2,3]} abc={{color:red}}

//5 rules converting html into jsx
//all props name are camelCase
//numbers attribute use curly braces 
//boolean true can be written using just proeprty name.False in curly braces
//class attribute is written as className to prevent confusing with JS Class
//inline styling are provided as objects abc={{color:red}}

//it is best to seperate components, so create App.js for the App function