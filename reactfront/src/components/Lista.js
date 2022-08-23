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
        console.log(response)
    }
    return (
    <div>
        <table>
            <thead className='bg-primary text-white'>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                {Asistencias.map((Asistencia)=>(
                    <tr key={Asistencia.id}>
                        <td>{Asistencia.fechaAsistencia}</td>
                        <td>funca</td>
                    </tr>
                ) )}
                
            </tbody>
        </table>
    </div>
  )
}

export default Lista