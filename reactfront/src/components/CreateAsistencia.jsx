import axios from "axios";
import React, { useState, useEffect /*, useRef */ } from "react";
import { useNavigate } from "react-router-dom";

var fecha_Actual = new Date()
var fecha_ISO = fecha_Actual.toISOString().split("T", 1)
/* Fecha Actual pasa a ser la de hace 1 año */
fecha_Actual.setFullYear(fecha_Actual.getFullYear() - 1)
var fecha_ISOPasado = fecha_Actual.toISOString().split("T", 1)

const endpoint = 'http://localhost:8000/api/asistencia'

const CreateAsistencia = () => {
  const [Tematicas, setTematicas] = useState([])
  const [Fichas, setFichas] = useState([])
  const [Ficha, setFicha] = useState([])
  const [erroresAxio, setErroresAxio] = useState("");
  const [fechaAsistencia, setfechaAsistencia] = useState('')
  const [idTematica, setidTematica] = useState("")

  const navigate = useNavigate()
  
  const getAllTematicaAprendiz = async () => {
    const response = await axios.get(`${endpoint}/create`)
    setTematicas(response.data[0])
    setFichas(response.data[2])
  }
  const Store = async (e) => {
    e.preventDefault()
    await axios.post(`${endpoint}`, {
      fechaAsistencia: fechaAsistencia,
      id_ficha: Ficha,
      id_tematica: idTematica
    })
      .then(() => {
        navigate('/')
      })
      .catch(function (error) {
        console.log(error.response.data.message)
        setErroresAxio(error.response.data.errors)
        let errores = error.response.data.errors
        if(errores != undefined){
          if (errores.fechaAsistencia != undefined) {
            document.getElementById("fechaError").classList.remove('d-none')
          }
          else {
            document.getElementById("fechaError").classList.add('d-none')
          }
          if (errores.id_tematica != undefined) {
            document.getElementById("tematicaError").classList.remove('d-none')
          }
          else {
            document.getElementById("tematicaError").classList.add('d-none')
          }
          if (errores.id_ficha != undefined) {
            document.getElementById("fichaError").classList.remove('d-none')
          }
          else {
            document.getElementById("fichaError").classList.add('d-none')
          }
        }
      })
  }
  var div = <div className="alert alert-danger"></div>
  useEffect(() => {
    getAllTematicaAprendiz()
  }, [])
  return (
    <>
    <nav className="navbar text-uppercase navbar-expand-md shadow p-13 mb-15 bg-body rounded bg-white">
  <div className="container-fluid">
    <a className="navbar-brand" href="">
        <img src='./Logo.png' className="d-inline-block align-top"/>
    </a>
    <button className="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span className="navbar-toggler-icon"></span>
    </button>
    <div className="collapse navbar-collapse" id="navbarNav">
      <ul className="navbar-nav navbar-right ms-auto  mb-2 mb-lg-0">
        <li className="nav-item">
          <a className="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href='/'><i className="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav><br></br>
<section className="d-flex justify-content-center">
    <div className="card col-sm-6 p-3 shadow-lg p-3 mb-5 bg-white rounded ">
        <div className="mb-3">
            <h4 className="text-center">Selecione una fecha expecifica</h4>
        </div>
        <div className="mb-2">
            <form onSubmit={Store}>
                <div className="row mb-4">
                  <label>Fecha</label>
                  <input className="form-control" placeholder="Fecha" autoFocus
                  min={fecha_ISOPasado}
                  max={fecha_ISO}
                  value={fechaAsistencia}
                  onChange={(e) => setfechaAsistencia(e.target.value)}
                  type='date' />
                  {<div className="alert alert-danger d-none" id="fechaError">{erroresAxio.fechaAsistencia}</div>}
                </div>
                <div className="row mb-4">
                  <label>Ficha</label>
                  <select type='select' onChange={(e) => setFicha(e.target.value)} className="form-control">
                  <option value="" >Selecciona una Ficha</option>
                  {Fichas.map((Ficha) => (
                  <option key={Ficha.id} value={Ficha.id}>{Ficha.numFicha}</option>
                  ))}</select>
                  {<div className="alert alert-danger d-none" id="fichaError">{erroresAxio.id_ficha}</div>}
                </div>
                <div className="row mb-4">
                  <label>Tematica</label>
                  <select type='select' onChange={(e) => setidTematica(e.target.value)} className="form-control">
                  <option value="">Selecciona una tematica</option>
                  {Tematicas.map((Tematica) => (
                  <option key={Tematica.id} value={Tematica.id}>{Tematica.nombreTematica}</option>
                  ))}</select>
                  {<div className="alert alert-danger d-none" id="tematicaError">{erroresAxio.id_tematica}</div>}  
                </div>
                <div className="row mb-4">
                <button type="submit" className="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
</section>
</>
)
}
export default CreateAsistencia