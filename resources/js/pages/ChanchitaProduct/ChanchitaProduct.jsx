import React, {useEffect, useState} from 'react'
import ReactDOM from 'react-dom';
import Axios from 'axios';
import $ from 'jquery';

import ProductCard from './ProductCard';
import ModalCard from './ModalCard';

// import ProductCard from 'ProductCard';

const ChanchitaProduct = () => {

  const [products, setProducts] = useState([]);
  const [chanchita, setChanchita] = useState('');
  const [selecteds, setSelecteds] = useState([]);
  
  const initial_product_values = {
    quantity:'',
    price:''
  }
  const [product, setProduct] = useState(initial_product_values);
  const [render, setRender] = useState(false);
  
  const pathname = window.location.pathname;
  // MIX_URL = ''

  const getProducts = async() => {
    const {data} = await Axios.get(`/api${pathname}/productos`);
    console.log(data);
    setProducts(data.products);
    setSelecteds(data.selecteds);
    setChanchita(data.chanchita_id);
  };

  useEffect(() => {
    getProducts();
    console.log('renderizando');
    // return () => {
    //   cleanup
    // }
  }, [])

  // Paso1: Activa el modal y envia el product
  const handleModal = (product) => {
    setProduct(product);
  }

  const handleClose = () => {
    document.getElementById("modal-form").reset();
  }

  // Paso2: Recibe la info de formulario y le suma el product_id
  const onSubmit = async (formdata) => {
    const product_id = product.id
    const chanchita_id = chanchita;
    console.log({...formdata, product_id, chanchita_id});

    const response = await Axios.post(`/api${pathname}/productos`, {...formdata, product_id, chanchita_id})
    console.log('data',response.data.msg);
    $('#staticBackdrop').modal('hide'); //Eliminar Jquery
    document.getElementById("modal-form").reset();
    getProducts();
  };
  // console.log('Productdata',productData);

  return (
    <>
      <div className="row">
      {
        products.map(product => 
          <ProductCard product={product} handleModal={handleModal} selecteds={selecteds} key={product.id}/>
        )
      }
      </div>
      <ModalCard product={product} onSubmit={onSubmit} handleClose={handleClose}/>
      acilis dicta dolor sit perspiciatis. Praesentium, magnam laborum! Consequuntur porro asperiores temporibus nesciunt in recusandae.
    </>
  )
}

export default ChanchitaProduct

if (document.getElementById('chanchita-product')) {
  ReactDOM.render(<ChanchitaProduct />, document.getElementById('chanchita-product'));
}