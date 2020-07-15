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
  name: yup.string().required(),
  lastname: yup.string().required(),
  email: yup.string().required(),
});

  const ModalCard = ({
      guest, 
      onSubmit, 
      handleClose
  }) => {

  const { register, handleSubmit, errors } = useForm({
    resolver: yupResolver(schema)
  });
  

  return (
    <div className="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabIndex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div className="modal-dialog">
        <div className="modal-content">
          <div className="modal-header">
            <h5 className="modal-title">
              {
                (Object.keys(guest).length === 0)
                ? 'Nuevo Invitado'
                : 'Editar Información'
              }
            </h5>
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
                    name="name"
                    defaultValue={guest.name}
                    placeholder="Ingrese el nombre"
                    ref={register}  
                />
                <p>{errors.name?.message}</p>
              </div>
              <div className="form-group">
                <input 
                    type="text" 
                    className="form-control" 
                    name="lastname"
                    defaultValue={guest.lastname}
                    placeholder="Ingrese el apellido"
                    // ref={
                    //   register({
                    //     required: {value:true, message: 'Precio obligatori'}
                    //   })
                    // } 
                    ref={register}
                />
                <p>{errors.lastname?.message}</p>
              </div>
              <div className="form-group">
                <input 
                    type="text" 
                    className="form-control" 
                    name="email"
                    defaultValue={guest.email}
                    placeholder="Ingrese el correo electrónico"
                    ref={register}  
                />
                <p>{errors.email?.message}</p>
              </div>
              <button type="submit"  className="btn button__base button__pink">Agregar a la lista</button>
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
