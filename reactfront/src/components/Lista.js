import React, { useEffect, useState } from 'react'
import axios/* , { AxiosError } */ from 'axios'
/* 
import { Link, useNavigate } from "react-router-dom"; */

const endpoint = 'http://localhost:8000/api'
const Lista = () => {
    const [OrdenAsistencia, setOrdenAsistencia] = useState("FichaDesc")
    const [AsistenciasFechaDesc, setAsistenciasFechaDesc] = useState([])
    const [AsistenciasFechaAsc, setAsistenciasFechaAsc] = useState([])
    const [AsistenciasEstadoAsc, setAsistenciasEstadoAsc] = useState([])
    const [AsistenciasEstadoDesc, setAsistenciasEstadoDesc] = useState([])
    const [AsistenciasNombreAsc, setAsistenciasNombreAsc] = useState([])
    const [AsistenciasNombreDesc, setAsistenciasNombreDesc] = useState([])
    const [AsistenciaFichaAsc, setAsistenciaFichaAsc] = useState([])
    const [AsistenciaFichaDesc, setAsistenciaFichaDesc] = useState([])

    useEffect(() => {
        getAllDatosAsistencias()
    }, [])

    const getAllDatosAsistencias = async () => {
        const response = await axios.get(`${endpoint}/asistencia`)
        setAsistenciasFechaDesc(response.data[0])
        setAsistenciasFechaAsc(response.data[1])
        setAsistenciasEstadoAsc(response.data[2])
        setAsistenciasEstadoDesc(response.data[3])
        setAsistenciasNombreAsc(response.data[4])
        setAsistenciasNombreDesc(response.data[5])
        setAsistenciaFichaAsc(response.data[6])
        setAsistenciaFichaDesc(response.data[7])
    }

    const up = "bi bi-caret-up-fill"
    const down = "bi bi-caret-down-fill"

    function mostrarAsistencia() {
        if (OrdenAsistencia == "AsistenciaAntigua") {
            AsistenciasFechaAsc.map(function (Asistencia) {
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
            return (
                AsistenciasFechaAsc.map((Asistencia, index) => (
                    <tr key={index}>
                        <td className={Asistencia.color}>{Asistencia.numFicha}</td>
                        <td className={Asistencia.color}>{Asistencia.fechaAsistencia}</td>
                        <td className={Asistencia.color}>{Asistencia.nombreAprend + " " + Asistencia.apelliAprend}</td>
                        <td className={Asistencia.color}>{Asistencia.estadoAsistencia}</td>
                    </tr>
                ))
            )
        }
        if (OrdenAsistencia == "AsistenciaReciente") {
            AsistenciasFechaDesc.map(function (Asistencia) {
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
            return (
                AsistenciasFechaDesc.map((Asistencia, index) => (
                    <tr key={index}>
                        <td className={Asistencia.color}>{Asistencia.numFicha}</td>
                        <td className={Asistencia.color}>{Asistencia.fechaAsistencia}</td>
                        <td className={Asistencia.color}>{Asistencia.nombreAprend + " " + Asistencia.apelliAprend}</td>
                        <td className={Asistencia.color}>{Asistencia.estadoAsistencia}</td>
                    </tr>
                ))
            )
        }
        if (OrdenAsistencia == "FichaAsc") {
            AsistenciaFichaAsc.map(function (Asistencia) {
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
            return (
                AsistenciaFichaAsc.map((Asistencia, index) => (
                    <tr key={index}>
                        <td className={Asistencia.color}>{Asistencia.numFicha}</td>
                        <td className={Asistencia.color}>{Asistencia.fechaAsistencia}</td>
                        <td className={Asistencia.color}>{Asistencia.nombreAprend + " " + Asistencia.apelliAprend}</td>
                        <td className={Asistencia.color}>{Asistencia.estadoAsistencia}</td>
                    </tr>
                ))
            )
        }
        if (OrdenAsistencia == "FichaDesc") {
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
            return (
                AsistenciaFichaDesc.map((Asistencia, index) => (
                    <tr key={index}>
                        <td className={Asistencia.color}>{Asistencia.numFicha}</td>
                        <td className={Asistencia.color}>{Asistencia.fechaAsistencia}</td>
                        <td className={Asistencia.color}>{Asistencia.nombreAprend + " " + Asistencia.apelliAprend}</td>
                        <td className={Asistencia.color}>{Asistencia.estadoAsistencia}</td>
                    </tr>
                ))
            )
        }
        if (OrdenAsistencia == "NombreAsc") {
            AsistenciasNombreAsc.map(function (Asistencia) {
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
            return (
                AsistenciasNombreAsc.map((Asistencia, index) => (
                    <tr key={index}>
                        <td className={Asistencia.color}>{Asistencia.numFicha}</td>
                        <td className={Asistencia.color}>{Asistencia.fechaAsistencia}</td>
                        <td className={Asistencia.color}>{Asistencia.nombreAprend + " " + Asistencia.apelliAprend}</td>
                        <td className={Asistencia.color}>{Asistencia.estadoAsistencia}</td>
                    </tr>
                ))
            )
        }
        if (OrdenAsistencia == "NombreDesc") {
            AsistenciasNombreDesc.map(function (Asistencia) {
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
            return (
                AsistenciasNombreDesc.map((Asistencia, index) => (
                    <tr key={index}>
                        <td className={Asistencia.color}>{Asistencia.numFicha}</td>
                        <td className={Asistencia.color}>{Asistencia.fechaAsistencia}</td>
                        <td className={Asistencia.color}>{Asistencia.nombreAprend + " " + Asistencia.apelliAprend}</td>
                        <td className={Asistencia.color}>{Asistencia.estadoAsistencia}</td>
                    </tr>
                ))
            )
        }
        if (OrdenAsistencia == "EstadoAsc") {
            AsistenciasEstadoAsc.map(function (Asistencia) {
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
            return (
                AsistenciasEstadoAsc.map((Asistencia, index) => (
                    <tr key={index}>
                        <td className={Asistencia.color}>{Asistencia.numFicha}</td>
                        <td className={Asistencia.color}>{Asistencia.fechaAsistencia}</td>
                        <td className={Asistencia.color}>{Asistencia.nombreAprend + " " + Asistencia.apelliAprend}</td>
                        <td className={Asistencia.color}>{Asistencia.estadoAsistencia}</td>
                    </tr>
                ))
            )
        }
        if (OrdenAsistencia == "EstadoDesc") {
            AsistenciasEstadoDesc.map(function (Asistencia) {
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
            return (
                AsistenciasEstadoDesc.map((Asistencia, index) => (
                    <tr key={index}>
                        <td className={Asistencia.color}>{Asistencia.numFicha}</td>
                        <td className={Asistencia.color}>{Asistencia.fechaAsistencia}</td>
                        <td className={Asistencia.color}>{Asistencia.nombreAprend + " " + Asistencia.apelliAprend}</td>
                        <td className={Asistencia.color}>{Asistencia.estadoAsistencia}</td>
                    </tr>
                ))
            )
        }
        else {
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
            return (
                AsistenciaFichaDesc.map((Asistencia, index) => (
                    <tr key={index}>
                        <td className={Asistencia.color}>{Asistencia.numFicha}</td>
                        <td className={Asistencia.color}>{Asistencia.fechaAsistencia}</td>
                        <td className={Asistencia.color}>{Asistencia.nombreAprend + " " + Asistencia.apelliAprend}</td>
                        <td className={Asistencia.color}>{Asistencia.estadoAsistencia}</td>
                    </tr>
                ))
            )
        }
    }
    return (
        <>
        <nav class="navbar text-uppercase navbar-expand-md  bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
        <img src='./Logo' class="d-inline-block align-top"/>
    </a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav navbar-right ms-auto  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link navbar-brand text-white " aria-current="page" href='/create'><i class="bi bi-plus-lg"> Crear</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-brand text-white " aria-current="page" href='http://localhost:8000/index'><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
        <div>
            <table className='bg-primary table-bordered text-white container '>
                <thead>
                    <tr>
                        <th><button className='btn btn-primary w-100 text-white' onClick={(e) => {
                            if (OrdenAsistencia == "FichaAsc") {
                                setOrdenAsistencia("FichaDesc")
                                document.getElementById("flechaFicha").className = down
                            } else {
                                setOrdenAsistencia("FichaAsc")
                                document.getElementById("flechaFicha").className = up
                            }
                        }}>Ficha <i className={down} id='flechaFicha'></i>
                        </button></th>
                        <th><button className='btn btn-primary w-100 text-white' onClick={(e) => {
                            if (OrdenAsistencia == "AsistenciaAntigua") {
                                setOrdenAsistencia("AsistenciaReciente")
                                document.getElementById("flechaAsistencia").className = down
                            } else {
                                setOrdenAsistencia("AsistenciaAntigua")
                                document.getElementById("flechaAsistencia").className = up
                            }
                        }}>Asistencia <i className={down} id='flechaAsistencia'></i>
                        </button></th>
                        <th><button className='btn btn-primary w-100 text-white' onClick={(e) => {
                            if (OrdenAsistencia == "NombreAsc") {
                                setOrdenAsistencia("NombreDesc")
                                document.getElementById("flechaNombre").className = down
                            } else {
                                setOrdenAsistencia("NombreAsc")
                                document.getElementById("flechaNombre").className = up
                            }
                        }}>Nombre <i className={down} id='flechaNombre'></i>
                        </button></th>
                        <th><button className='btn btn-primary w-100 text-white' onClick={(e) => {
                            if (OrdenAsistencia == "EstadoAsc") {
                                setOrdenAsistencia("EstadoDesc")
                                document.getElementById("flechaEstado").className = down
                            } else {
                                setOrdenAsistencia("EstadoAsc")
                                document.getElementById("flechaEstado").className = up
                            }
                        }}>Estado <i className={down} id='flechaEstado'></i>
                        </button></th>
                    </tr>
                </thead>
                <tbody>
                    {mostrarAsistencia()}
                </tbody>
            </table>
        </div></>
    )
}

export default Lista