
import Footer from './components/Footer';
import Header from './components/Header';
import UseState from './components/UseState';
function App() {
  // const products = ['a','b','m','v'];
  const items = [ 
    {name: 'Nokia', price: 12000},
    {name: 'Apple', price: 120000},
    {name: 'Sumsang', price: 200440},
    {name: 'Vivo', price: 123000}
  ]
  const fAlrt = () =>{ 
    alert('done');
  }

  return (
    <>

{/* <Header 
pro ={products}>

</Header> */}

    {/* { 
    products.map(product =><Header 
      aPro = {product}
      alt = {fAlrt}
    />)
    
    } */}
  {/* {
  items.map(itm =><Header 
  a = {itm}
 />)} */}

   <UseState/>

    </>
  )
}

export default App
