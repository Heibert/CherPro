import React, { Component, useEffect, useState } from 'react'
import axios/* , { AxiosError } */ from 'axios'
import { Link, useParams, useNavigate } from "react-router-dom";
const endpoint = 'http://localhost:8000/api/asistencia'
function change() {
    var datos = (document.getElementById("busqueda").value)
}

const Lista = () => {
    const [Asistencias, setAsistencias] = useState([])
    const [AsistenciaFichaDesc, setAsistenciaFichaDesc] = useState([])
    const [fechaAsistencia, setfechaAsistencia] = useState('')
    const [estadoAsistencia, setEstadoAsistencia] = useState('')
    const [idAprendiz, setidAprendiz] = useState("")
    const [Fichas, setFichas] = useState([])
    const [Ficha, setFicha] = useState([])
    const updateE = async (e) => {
        console.log(Asistencias)
        var id = idAprendiz
        console.log(id)
        e.preventDefault()
        console.log("Estado: ", estadoAsistencia, "fecha: ", fechaAsistencia)
        await axios.put(`${endpoint}/${id}`, {
            fechaAsistencia: fechaAsistencia,
            estadoAsistencia: estadoAsistencia,
        }).then(console.log("logrado"))
            .catch(function (error) {
                console.log("Hubo un error al guardar: ", error.response.data.message)
            })
    }

    useEffect(() => {
        getAllDatosAsistencias()
    }, [])

    const getAllDatosAsistencias = async () => {
        const response = await axios.get(`${endpoint}`)
        setAsistencias(response.data[1])
        setAsistenciaFichaDesc(response.data[2])
        setFichas(response.data[3])
        console.log("Response: ", response.data)
    }
    console.log(Ficha)
    function mostrarAsistencia() {
            AsistenciaFichaDesc.map(function (Asistencia) {
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
            })
            /* --------------------------------------------------------------------------------------- */
            return (
                AsistenciaFichaDesc.map((Asistencia, index) => (
                    <div className='row h5' key={index}>
                        <input type="number" placeholder={Asistencia.numFicha} onChange={(e) => { setfechaAsistencia(e.target.value) }} defaultValue={Asistencia.numFicha} className={Asistencia.color + " col text-white border"} />
                        <input type="date" className={Asistencia.color + " col text-white border"} onChange={(e) => { setfechaAsistencia(e.target.value) }} id={"F" + Asistencia.id_aprendiz} defaultValue={Asistencia.fechaAsistencia} />
                        <input type="text" placeholder={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} defaultValue={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} className={Asistencia.color + " col text-white border"} />
                        <input className={Asistencia.color + " col text-white border"} id={"E" + Asistencia.id_aprendiz}
                            placeholder={Asistencia.estadoAsistencia} onChange={(e) => { setEstadoAsistencia(e.target.value) }}
                            onKeyDown={(e) => { setidAprendiz(Asistencias[index].id) }} onKeyUp={updateE} />
                    </div>
                ))
            )
        /*  -------------------------------------------------------------------------------------------*/
    }
    return (
        <>
            <nav className="navbar text-uppercase navbar-expand-md shadow p-13 mb-15 bg-body rounded bg-white">
                <div className="container-fluid">
                    <a className="navbar-brand" href="">
                        <img src='./Logo.png' className="d-inline-block align-top" />
                    </a>
                    <button className="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                    </button>
                    <div className="collapse navbar-collapse" id="navbarNav">
                        <ul className="navbar-nav navbar-right ms-auto  mb-2 mb-lg-0">
                            <li className="nav-item">
                                <a className="nav-link navbar-brand text-back btn btn-outline-white " aria-current="page" href='/create'><i className="bi bi-plus-lg"> Crear</i></a>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href='http://127.0.0.1:8000/admin'><i className="bi bi-unindent"> Atras</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div className='input-group mb-3 mt-3 '>
                <input type="text"
                    onChange={change}
                    placeholder="Buscar aprendiz"
                    className='textfield form-control'
                    name='busqueda'
                    id='busqueda'
                />
                <div className="col ">
                    <select type='select' onChange={(e) => setFicha(e.target.value)} className="form-control">
                        <option value="" >Selecciona una Ficha</option>
                        {Fichas.map((Ficha) => (
                            <option key={Ficha.id} value={Ficha.id}>{Ficha.numFicha}</option>
                        ))}
                    </select>
                </div>
            </div>
            <div className='container-fluid'>
                <div className="row">
                    <div className="col">
                        <button className='btn btn-primary w-100 text-white'>Ficha <i className={"bi bi-caret-down-fill"} ></i></button>
                    </div>
                    <div className="col">
                        <button className='btn btn-primary w-100 text-white'>Asistencia <i className={"bi bi-caret-down-fill"} id='flechaAsistencia'></i></button>
                    </div>
                    <div className="col">
                        <button className='btn btn-primary w-100 text-white'>Nombre <i className={"bi bi-caret-down-fill"} id='flechaNombre'></i></button>
                    </div>
                    <div className="col">
                        <button className='btn btn-primary w-100 text-white'>Estado <i className={"bi bi-caret-down-fill"} id='flechaEstado'></i></button>
                    </div>
                </div>
                {mostrarAsistencia()}
            </div>
        </>
    )
}
export default Lista