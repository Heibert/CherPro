import React, {useEffect, useState} from 'react'
import axios from 'axios'

import {Link} from "react-router-dom";

const endpoint = 'http://localhost:8000/api'
const Lista = () => {
    const [Asistencias, setAsistencias] = useState ( [] )

    useEffect ( ()=> {
        getAllAsistencias()
    }, [])

    const getAllAsistencias = async () => {
        const response = await axios.get(`${endpoint}/asistencia`)
        setAsistencias(response.data)
    }

var Fecha_Actual = new Date()
var fecha_iso = Fecha_Actual.toISOString()
var fecha_buena = fecha_iso.split("T", 1); 
Asistencias.map(function(Asistencia){
    var Fechas = Asistencia.fechaAsistencia 
    if (Asistencia.fechaAsistencia) { 

    }
    switch (Asistencia.Asistencia) {
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
    })
    let copiaArray = Asistencias.length();
    console.log(Asistencias,"",copiaArray)
    return (
    <div>
        <button className='btn btn-primary'>crear</button>
        <table className='bg-primary table-bordered text-white'>
            <thead>
                <tr>
                    <th>Nombre</th>
                    {Asistencias.map((Asistencia)=>(
                    <><th>{Asistencia.fechaAsistencia}</th></>
                    ))}
                </tr>
            </thead>
            <tbody>
                {Asistencias.map((Asistencia)=>(
                    <tr key={Asistencia.id}>
                        <td className={Asistencia.color}>{Asistencia.nombre}</td>
                        <td className={Asistencia.color}>{Asistencia.Asistencia}</td>
                    </tr>
                ) )}
            </tbody>
        </table>
    </div>
  )
}

export default Lista