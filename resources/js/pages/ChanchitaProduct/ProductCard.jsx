import React from 'react'

const ProductCard = ({product, handleModal, selecteds}) => {

  
  const origin = window.location.origin;
  const urlImg = product.url_img.replace('public', `${origin}/storage`);

  return (
    <div className="col-10 col-md-6 col-lg-4 mb-4">
      <div className="card product__card shadow">
        <figure className="w-100 product__img-box">
          <img className="w-100" src={urlImg} alt=""/>
        </figure>
        <div className="card-body product__body">
          <div className="product__title-box">
            <h3 className="product__title">{product.name}</h3>
          </div>
          {/* <p>{{ $product->price }}</p> */}
          {/* !! Arreglar desde controlador */}
          <div className="d-flex justify-content-between align-items-center">
            {/* <span className="product__price">S/ {product.price}</span> */}

            {/* @if (in_array($product->id, $selected_ids)) */}
            {
              ( selecteds.includes(product.id))
                ? <button className="btn btn-outline-info button__base" disabled>En lista</button>
                : (
                  <button 
                    className="btn btn-pink button__base button__pink"
                    data-toggle="modal" 
                    data-target="#staticBackdrop"
                    onClick={()=>handleModal({...product})}
                  >
                      Añadir
                  </button>
                )
            }
              {/* <button className="btn btn-outline-success">Seleccionado</button> */}

            {/* @else  */}
              {/* <button 
                className="btn btn-pink button__base button__pink"
                data-toggle="modal" 
                data-target="#staticBackdrop"
                onClick={()=>handleModal({...product})}
              >
                  Añadir
              </button>    */}
              {/* <button className="btn" data-toggle="modal" data-target="#staticBackdrop">Modal</button> */}
            {/* // @endif */}
          </div>
        </div>
      </div>
    </div>
  )
}

export default ProductCard
