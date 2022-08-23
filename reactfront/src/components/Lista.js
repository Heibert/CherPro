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
    console.log(Asistencia)
        if (fecha_buena == Asistencias.fechaAsistencia) {
            console.log('Encontrado en: ',Asistencia.id, "Y la fecha es: ",Asistencia.fechaAsistencia)
        }
        else(
            console.log("No encontrado")
        )
    }) 
/*     for (let i = 0; i < Asistencias.length; i++) {
        Asistencias.
        
    } */
    return (
    <div>
        <button className='btn btn-primary'>crear</button>
        <table className='bg-primary text-white'>
            <thead >
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                {Asistencias.map((Asistencia)=>(
                    <tr key={Asistencia.id}>
                        <td>Asistencia numero {Asistencia.id}</td>
                        <td>Su fecha fue {Asistencia.fechaAsistencia}</td>
                    </tr>
                ) )}
                
            </tbody>
        </table>
    </div>
  )
}

export default Lista