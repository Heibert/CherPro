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
    Asistencia.lol = "losl";
    }) 
    return (
    <div>
        <button className='btn btn-primary'>crear</button>
        <table className='bg-primary text-white'>
            <thead >
                <tr>
                    <th>Fecha</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                {Asistencias.map((Asistencia)=>(
                    <tr key={Asistencia.id}>
                        <td className='bg-success bg-gradient'>{Asistencia.fechaAsistencia}</td>
                        <td className='bg-secondary bg-gradient'>{Asistencia.nombre}</td>
                        <td>{Asistencia.lol}</td>
                    </tr>
                ) )}
                
            </tbody>
        </table>
    </div>
  )
}

export default Lista