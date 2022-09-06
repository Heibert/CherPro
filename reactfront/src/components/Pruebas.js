import axios, { Axios, AxiosError } from "axios";
import React, { useState, useEffect, useRef } from "react";
import { useNavigate } from "react-router-dom";

const endpoint = 'http://localhost:8000/api/asistencia'

const CreateAsistencia = () => {

    const [erroresAxio, setErroresAxio] = useState("");

    const [fechaAsistencia, setfechaAsistencia] = useState('')
    const [estadoAsistencia, setestadoAsistencia] = useState('')
    const [idAprendiz, setidAprendiz] = useState(0)
    const [idTematica, setidTematica] = useState(0)

    const navigate = useNavigate()

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
            })
    }

    function mostrarDato() {
        var Dato = ["10","8","6"]
        console.log(Dato.sort())
    }

    useEffect(() => {
        mostrarDato()
      }, [])

    return (
        <div>
            <h3>Insertar la asistencia de una fecha especifica</h3>
            <h1 className="text-danger">{erroresAxio}</h1>
            <form onSubmit={Store}>
                <div className="mb-3">
                    <label className="form-label">Fecha:</label>
                    <input
                        value={fechaAsistencia}
                        onChange={(e) => setfechaAsistencia(e.target.value)}
                        type='date'
                        className="form-control"
                    />
                    <label className="form-label">estado:</label>
                    <input
                        value={estadoAsistencia}
                        onChange={(e) => setestadoAsistencia(e.target.value)}
                        type='text'
                        className="form-control"
                    />
                    <label className="form-label">Aprendiz:</label>
                    <input
                        value={idAprendiz}
                        onChange={(e) => setidAprendiz(e.target.value)}
                        type='number'
                        className="form-control"
                    />
                    <label className="form-label">Tematica:</label>
                    <input
                        value={idTematica}
                        
                        onChange={(e) => setidTematica(e.target.value)}
                        type='number'
                        className="form-control"
                    />
                </div>
                <button onClick={mostrarDato()} type="submit">Crear</button>
            </form>
        </div>
    )
}
export default CreateAsistencia