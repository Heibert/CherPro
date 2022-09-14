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

  const [Validation, setValidation] = useState([])
  const [Aprendices, setAprendices] = useState([])
  const [Tematicas, setTematicas] = useState([])
  const [Fichas, setFichas] = useState([])
  const [erroresAxio, setErroresAxio] = useState("");
  const [fechaAsistencia, setfechaAsistencia] = useState('')
  const [estadoAsistencia, setEstadoAsistencia] = useState('')
  const [idAprendiz, setidAprendiz] = useState("")
  const [idTematica, setidTematica] = useState("")

  const navigate = useNavigate()

  const getAllTematicaAprendiz = async () => {
    const response = await axios.get(`${endpoint}/create`)
    setAprendices(response.data[1])
    setTematicas(response.data[0])
    setFichas(response.data[2])
  }
  const Store = async (e) => {
    e.preventDefault()
    const response = await axios.get(`${endpoint}/store`)
    setValidation(response.data[0])
    await axios.post(endpoint, {
      fechaAsistencia: fechaAsistencia,
      estadoAsistencia: estadoAsistencia,
      id_aprendiz: idAprendiz,
      id_tematica: idTematica
    })
      .then(() => {
        navigate('/')
      })
      .catch(function (error) {
        setErroresAxio(error.response.data.errors)
        let errores = error.response.data.errors
        console.log(errores)
        if (errores.fechaAsistencia != undefined) {
          document.getElementById("fechaError").classList.remove('d-none')
        }
        else {
          document.getElementById("fechaError").classList.add('d-none')
        }
        if (errores.estadoAsistencia != undefined) {
          document.getElementById("estadoError").classList.remove('d-none')
        }
        else {
          document.getElementById("estadoError").classList.add('d-none')
        }
        if (errores.id_aprendiz != undefined) {
          document.getElementById("aprendizError").classList.remove('d-none')
        }
        else {
          document.getElementById("aprendizError").classList.add('d-none')
        }
        if (errores.id_tematica != undefined) {
          document.getElementById("tematicaError").classList.remove('d-none')
        }
        else {
          document.getElementById("tematicaError").classList.add('d-none')
        }
        if (errores.ficha != undefined) {
          document.getElementById("fichaError").classList.remove('d-none')
        }
        else {
          document.getElementById("fichaError").classList.add('d-none')
        }
      })
  }
  var div = <div className="alert alert-danger"></div>
console.log(erroresAxio)
  useEffect(() => {
    getAllTematicaAprendiz()
  }, [])
  return (
    <div>
      <h1 className="mt-3 mb-5">Selecione Una Fehca Expecifica</h1>
      <ul className="nav nav-tabs">
        <li className="nav-item">
          <a className="nav-link" href="/">Lista</a>
        </li>
        <li className="nav-item">
          <a className="nav-link active" href="#">Crear</a>
        </li>
        <li className="nav-item">
          <a className="nav-link" href="#">Salir</a>
        </li>
      </ul>
      <form onSubmit={Store}>
        <div className="row">
          <div className="col">
            <label className="form-label mt-5 mb-3">Fecha:</label>
            <input className="form-control" placeholder="Fecha" autoFocus
              min={fecha_ISOPasado}
              max={fecha_ISO}
              value={fechaAsistencia}
              onChange={(e) => setfechaAsistencia(e.target.value)}
              type='date' />
            <div className="alert alert-danger d-none" id="fechaError">{erroresAxio.fechaAsistencia}</div>
          </div>
          <div className="col">
            <label className="form-label mt-5 mb-3">Estado:</label>
            <select type='select' onChange={(e) => setEstadoAsistencia(e.target.value)} className="form-control">
              <option value="">Elija una opcion</option>
              <option value="A">Asistio</option>
              <option value="R">Retardo</option>
              <option value="E">Excusa</option>
              <option value="F">Falla</option>
            </select>
            <div className="alert alert-danger d-none" id="estadoError">{erroresAxio.estadoAsistencia}</div>
          </div>
        </div>
        {/*  */}
        <div className="row">
          <div className="col">
            <label className="form-label mt-5 mb-3">Ficha:</label>
            <select type='select' onChange={(e) => setFichas(e.target.value)} className="form-control">
              <option value="">Selecciona una Ficha</option>
              {Fichas.map((Ficha) => (
                <option key={Ficha.id} value={Ficha.id}>{Ficha.numFicha}</option>
              ))}
            </select>
            <div className="alert alert-danger d-none" id="fichaError">{erroresAxio.ficha}</div>
          </div>
        </div>
        {/*  */}
        <div className="row">
          <div className="col">
            <label className="col-sm-2 col-form-label mt-4 mb-3">Aprendiz:</label>
            <select type='select' onChange={(e) => setidAprendiz(e.target.value)} className="form-control">
              <option value="">Selecciona un Aprendiz</option>
              {Aprendices.map((Aprendiz) => (
                <option key={Aprendiz.id} value={Aprendiz.id}>{Aprendiz.nombreAprend + " " + Aprendiz.apelliAprend}</option>
              ))}
            </select>
            <div className="alert alert-danger d-none " id="aprendizError">{erroresAxio.id_aprendiz}</div>
          </div>
          <div className="col">
            <label className="col-sm-2 col-form-label mt-4 mb-3">Tematica:</label>
            <select type='select' onChange={(e) => setidTematica(e.target.value)} className="form-control">
              <option value="">Selecciona una tematica</option>
              {Tematicas.map((Tematica) => (
                <option key={Tematica.id} value={Tematica.id}>{Tematica.nombreTematica}</option>
              ))}
            </select>
            <div className="alert alert-danger d-none" id="tematicaError">{erroresAxio.id_tematica}</div>
          </div>
        </div>

        <button type="submit" className="btn btn-primary mt-5 mb-3">Crear</button>

      </form>
    </div>
  )
}
export default CreateAsistencia