import React, { useEffect, useState } from 'react'
import axios from 'axios'
/* 
import { Link, useNavigate } from "react-router-dom"; */

const endpoint = 'http://localhost:8000/api'
const Lista = () => {
    const [Asistencias, setAsistencias] = useState([])

    useEffect(() => {
        getAllDatosAsistencias()
    }, [])

    const getAllDatosAsistencias = async () => {
        const response = await axios.get(`${endpoint}/asistencia`)
        setAsistencias(response.data)
    }
    var AsistenciaArray = []
    var Fecha_Actual = new Date()
    var fecha_iso = Fecha_Actual.toISOString()
    var fecha_buena = fecha_iso.split("T", 1);
    Asistencias.map(function (Asistencia) {
        var Fechas = Asistencia.fechaAsistencia
        switch (Asistencia.estadoAsistencia) {
            case "A":
                Asistencia.color = "bg-success";
                break;
            case "F":
                Asistencia.color = "bg-danger";
                break;
            case "E":
                Asistencia.color = "bg-success";
                break;
            case "R":
                Asistencia.color = "bg-warning";
                break;
            default:
                break;
        }
        AsistenciaArray.push(Asistencia.fechaAsistencia)
        Asistencias
    })
console.log("sort",AsistenciaArray.sort())
    return (
        <div>
            <div className='d-grid gap-2'>
                <a href='/create' className='btn btn-success btn-lg mt-2 mb-2 text-white'>Crear asistencia de una fecha especifica</a>
            </div>
            <table className='bg-primary table-bordered text-white'>
                <thead>
                    <tr>
                        <th>Asistencias</th>
                        <th>Nombre</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                {Asistencias.map((Asistencia) => (
                    <tr key={Asistencia.id}>
                        <td key={Asistencia.id}>{AsistenciaArray[1]}</td>
                        <td className={Asistencia.color}>{Asistencia.nombre}</td>
                        <td className={Asistencia.color}>{Asistencia.estadoAsistencia}</td>
                    </tr>
                    ))}
                </tbody>
            </table>
        </div>
    )
}

export default Lista