import axios from "axios";
import React, { useState, useEffect /*, useRef */} from "react";
import { useNavigate } from "react-router-dom";

var fecha_Actual = new Date()
var fecha_AñoPasado = new Date()
fecha_AñoPasado.setFullYear(fecha_Actual.getFullYear() - 1)
var fecha_ISOPasada = fecha_AñoPasado.toISOString()
var fecha_CorrectaPasado = fecha_ISOPasada.split("T", 1)
var fecha_ISO = fecha_Actual.toISOString()
var fecha_Correcta = fecha_ISO.split("T", 1)

const endpoint = 'http://localhost:8000/api/asistencia'

const CreateAsistencia = () => {

  const [Aprendices, setAprendices] = useState([])
  const [Tematicas, setTematicas] = useState([])
  const [erroresAxio, setErroresAxio] = useState("");
  const [fechaAsistencia, setfechaAsistencia] = useState('')
  const [estadoAsistencia, setEstadoAsistencia] = useState('')
  const [idAprendiz, setidAprendiz] = useState(0)
  const [idTematica, setidTematica] = useState(0)

  const navigate = useNavigate()

  const getAllTematicaAprendiz = async () => {
    const response = await axios.get(`${endpoint}/create`)
    setAprendices(response.data[1])
    setTematicas(response.data[0])
  }

  const Store = async (e) => {
    e.preventDefault()
    await axios.post(endpoint, {
      fechaAsistencia: fechaAsistencia,
      estadoAsistencia: estadoAsistencia,
      idAprendiz: idAprendiz,
      idTematica: idTematica
    })
      .then(() => {
        navigate('/')
      })
      .catch(function (error) {
        setErroresAxio(error.response.data.message)
        console.log(error.response.data.message)
      })
  }

  useEffect(() => {
    getAllTematicaAprendiz()
  }, [])

  return (
    <div>
      <h3>Insertar la asistencia de una fecha especifica</h3>
      <h1 className="text-danger">{erroresAxio}</h1>
      <form onSubmit={Store}>
        <div className="mb-3">
          <label className="form-label">Fecha:</label>
          <input
            autoFocus
            min={fecha_CorrectaPasado}
            max={fecha_Correcta}
            value={fechaAsistencia}
            onChange={(e) => setfechaAsistencia(e.target.value)}
            type='date'
            className="form-control"
          />
          <label className="form-label">Estado:</label>
          <select type='select' onChange={(e) => setEstadoAsistencia(e.target.value)} className="form-control">
            <option value="A">Asistio</option>
            <option value="R">Retardo</option>
            <option value="E">Excusa</option>
            <option value="F">Falla</option>
          </select>
          <label className="form-label">Aprendiz:</label>
          <select type='select' onChange={(e) => setidAprendiz(e.target.value)} className="form-control">
            <option value="">Selecciona un Aprendiz</option>
            {Aprendices.map((Aprendiz) => (
              <option key={Aprendiz.id} value={Aprendiz.id}>{Aprendiz.nombre}</option>
            ))}
          </select>
          <label className="form-label">Tematica:</label>
          <select type='select' onChange={(e) => setidTematica(e.target.value)} className="form-control">
            <option value="">Selecciona una tematica</option>
            {Tematicas.map((Tematica) => (
              <option key={Tematica.id} value={Tematica.id}>{Tematica.nombreTematica}</option>
            ))}
          </select>
        </div>
        <button type="submit">Crear</button>
      </form>
    </div>
  )
}
export default CreateAsistencia