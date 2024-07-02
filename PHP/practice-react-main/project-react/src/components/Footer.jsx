import React from 'react';
import './Footer.css';
const boxStyle = { 
    border: '6px solid red',
    padding: '50px 70px',
    backgroundColor:'gray',
    margin: '30px'
}
const Footer = (props) => {
console.log(props);
    function submit(){ 
        alert("ok");
    }
    return (
        <div style={boxStyle}>
           <h2>ID:{props.id}</h2>
           <h2>Name:{props.name}</h2>
           <h2>Address:{props.adress}</h2>
           <h2>Email:{props.email}</h2>
            <button onClick={()=>submit()}>Submit</button>
        </div>
    );
};

export default Footer;