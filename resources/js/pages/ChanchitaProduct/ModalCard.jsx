import React from 'react'
import { useForm } from 'react-hook-form';
import { yupResolver } from '@hookform/resolvers';
import * as yup from 'yup';
import { setLocale } from 'yup';

setLocale({
  number: {
    integer: 'Ingrese un número entero',
  },
});

const schema = yup.object().shape({
  quantity: yup.number().integer().positive().required(),
  price: yup.number().positive().required(),
});

  const ModalCard = ({product, onSubmit, handleClose}) => {

  const { register, handleSubmit, errors } = useForm({
    resolver: yupResolver(schema)
  });
  // const onSubmit = (data) => {
  //   console.log(data);
  // };

  return (
    <div className="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabIndex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div className="modal-dialog">
        <div className="modal-content">
          <div className="modal-header">
            <h5 className="modal-title" id="staticBackdropLabel">{product.name}</h5>
            <button type="button" className="close" data-dismiss="modal" aria-label="Close" onClick={handleClose}>
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div className="modal-body">


            <form onSubmit={handleSubmit(onSubmit)} id="modal-form">
            {/* <form > */}

              <div className="form-group">
                <input 
                    type="text" 
                    className="form-control" 
                    name="quantity"
                    placeholder="Ingrese la cantidad de productos"
                    ref={register}  
                />
                <p>{errors.quantity?.message}</p>
              </div>
              <div className="form-group">
                <input 
                    type="text" 
                    className="form-control" 
                    name="price"
                    placeholder="Ingrese el precio estimado"
                    // ref={
                    //   register({
                    //     required: {value:true, message: 'Precio obligatori'}
                    //   })
                    // } 
                    ref={register}
                />
                <p>{errors.price?.message}</p>
              </div>
              <button  className="btn button__base button__pink">Seleccionar</button>
            </form>


          </div>
          {/* <div className="modal-footer">
            <button type="button" className="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" className="btn btn-primary">Seleccionar</button>
          </div> */}
        </div>
      </div>
    </div>
  )
}

export default ModalCard
