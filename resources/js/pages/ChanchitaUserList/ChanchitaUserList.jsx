import React, {useState, useEffect} from 'react'
import ReactDOM from 'react-dom';
import Axios from 'axios';
import $ from 'jquery';

import ModalCard from './ModalCard';

const ChanchitaUserList = () => {

  const [guests, setGuests] = useState([]);
  const [guest, setGuest] = useState({});
  const [chanchitaId, setChanchitaId] = useState('');
  const [modalEdit, setModalEdit] = useState(false);
  
  const pathname = window.location.pathname;
   console.log(pathname);
  const getGuests = async() => {
    const {data} = await Axios.get(`/api${pathname}`);
    setGuests(data.guests);
    setChanchitaId(data.chanchita_id);
  } 

  console.log('chanchita_id', chanchitaId);
  useEffect(() => {
    getGuests()
  }, [])
  
  // const handleModal = () => {
  //   setProduct(product);
  // }

  const handleClose = () => {
    document.getElementById("modal-form").reset();
    setModalEdit(false);
    setGuest({});
  }

  // Paso2: Recibe la info de formulario y le suma el product_id
  const onSubmit = async (formdata) => {
    console.log('data del form', formdata)
    // const product_id = product.id
    const chanchita_id = chanchitaId;
    // console.log({...formdata, product_id, chanchita_id});
    if (modalEdit) {
      const guest_id = guest.id;
      const response = await Axios.put(`/api${pathname}/guest/${guest_id}`, {...formdata, chanchita_id});
      setModalEdit(false);
    } else {
      const response = await Axios.post(`/api${pathname}/guest`, {...formdata, chanchita_id})
    }
    console.log('solo alerta');
    // console.log('data',response);
    setGuest({});
    $('#staticBackdrop').modal('hide'); //Eliminar Jquery
    document.getElementById("modal-form").reset();
    getGuests();
  };

  const handleEdit = (guest_info) => {
    setGuest(guest_info);
    setModalEdit(true);
  }
  console.log('modalEdi', modalEdit);

  const handleDelete = async(guest_id) => {
    console.log('deleted', guest_id);
    const response = await Axios.delete(`/api${pathname}/guest/${guest_id}`)
    console.log(response.data.msg);
    await getGuests();
  }

  return (
    <>
      <div className="card">
        <div className="card-body">
          <div className="d-flex justify-content-between align-items-center mb-4">

            <h5>Nuevos participantes</h5>
            <button 
                    className="btn btn-pink button__base button__pink"
                    data-toggle="modal" 
                    data-target="#staticBackdrop"
                    // onClick={()=>handleModal({...product})}
                  >
                      Añadir
                  </button>
          </div>
          {/* <hr/> */}
          <table className="table table-bordered">
            <thead>
              <tr>
                <th>Nº</th>
                <th>Nombre</th> 
                <th>Apellido</th> 
                <th>Email</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              {
                guests.map((guest, index) => {
                  return (
                    <tr key={guest.id}>
                      <td>{index +1}</td>
                      <td>{guest.name}</td>
                      <td>{guest.lastname}</td>
                      <td>{guest.email}</td>
                      <td>
                        <button 
                            className="btn button__base btn-light mr-2" 
                            data-toggle="modal" 
                            data-target="#staticBackdrop"
                            onClick={()=>handleEdit(guest)}
                        >
                            Modificar
                        </button>
                        <button className="btn button__base btn-light" onClick={()=>handleDelete(guest.id)}>Quitar</button>
                      </td>
                    </tr>
                  )
                })
              }
            </tbody>
          </table>
        </div>
      </div>
      
      <ModalCard 
          guest={guest} 
          onSubmit={onSubmit} 
          handleClose={handleClose}
      />
    </>
  )
}

export default ChanchitaUserList

if (document.getElementById('userlistpage')) {
  ReactDOM.render(<ChanchitaUserList />, document.getElementById('userlistpage'));
}