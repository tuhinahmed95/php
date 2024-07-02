import React from 'react';

const Header = (props) => {
   
    // console.log(props.aPro);
    // console.log(props.alt);
    console.log(props.a);
    return (
        <div>
           {/* <h1>Product Name: {props.aPro[1]}</h1>
           <h1>Product Price: {props.aPro}</h1>
          <button onClick={props.alt}>Click Here..</button> */}
          <h1>Item Name:{props.a.name}</h1>
          <h2>Item Name:{props.a.price}</h2>
        </div>
    );
};

export default Header;