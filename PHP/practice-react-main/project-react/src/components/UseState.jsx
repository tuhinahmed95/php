import React, { useState } from 'react';

const UseState = () => {
    // const [price,setPrice] =useState(12);
    // const incrimentHandale = ()=>{ 
        //     const newPrice = price + 1;
        //     setPrice(newPrice);
        //     console.log(price);
        // }
    const [price,setPrice]  = useState(0);

    const  incriseHandle =()=>{ 
        // console.log(price);
        const newPrice = price + 1;
        setPrice(newPrice);
    }

    const  decriseHandle =()=>{ 
        // console.log(price);
        const newPrice = price - 1;
        setPrice(newPrice);
    }
    return (
        <div>
            <h1>UseState</h1>
            <h2>Count Increase : {price}</h2>
<button onClick={incriseHandle}>Increase</button>
<button onClick={decriseHandle}>Dencrease</button>
        </div>
    );
};

export default UseState;