import React, { Component, useEffect, useState } from 'react'
import axios/* , { AxiosError } */ from 'axios'
import { Link, useParams, useNavigate } from "react-router-dom";
const endpoint = 'http://localhost:8000/api/asistencia'

class App extends Component{
    state={
        busqueda: ''
    }
    onChange=async e=>{
        e.persist();
        await this.setState({busqueda: e.target.value})
        console.log(this.state.target)
    }
}
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

    const EditAsistencia = () => {
        const [Aprendices, setAprendices] = useState([])
        const [Tematicas, setTematicas] = useState([])
        /* const [erroresAxio, setErroresAxio] = useState(""); */
        const [fechaAsistencia, setfechaAsistencia] = useState('')
        const [estadoAsistencia, setEstadoAsistencia] = useState('')
        const [idAprendiz, setidAprendiz] = useState("")
        const [idTematica, setidTematica] = useState("")
        const { id } = useParams()
        const update = async (e) => {
            e.preventDefault()
            await axios.put('${endpoint}${id}', {
                fechaAsistencia: fechaAsistencia,
                estadoAsistencia: estadoAsistencia,
                id_aprendiz: idAprendiz,
                id_tematica: idTematica
            })
        }
        useEffect(() => {
            const getAsistenciaById = async () => {
                const response = await axios.get('${endpoint}${id}')
                await axios.get('${endpoint}${id}')
                setAprendices(response.data.Aprendices)
                setTematicas(response.data.Tematicas)
                setfechaAsistencia(response.data.fechaAsistencia)
                setEstadoAsistencia(response.data.estadoAsistencia)
                setidAprendiz(response.data.idAprendiz)
                setidTematica(response.data.idTematica)
            }
            getAsistenciaById()
        })
    }

    useEffect(() => {
        getAllDatosAsistencias()
    }, [])



    const getAllDatosAsistencias = async () => {
        const response = await axios.get(`${endpoint}`)
        setAsistenciasFechaDesc(response.data[0])
        setAsistenciasFechaAsc(response.data[1])
        setAsistenciasEstadoAsc(response.data[2])
        setAsistenciasEstadoDesc(response.data[3])
        setAsistenciasNombreAsc(response.data[4])
        setAsistenciasNombreDesc(response.data[5])
        setAsistenciaFichaAsc(response.data[6])
        setAsistenciaFichaDesc(response.data[7])
        console.log(response.data)
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
                    <div className="container-fluid row h5" key={index}>
                        <input type="number" placeholder={Asistencia.numFicha} defaultValue={Asistencia.numFicha} className={Asistencia.color + " col text-white border"} />
                        <input type="date" className={Asistencia.color + " col text-white border"} defaultValue={Asistencia.fechaAsistencia} />
                        <input type="text" placeholder={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} defaultValue={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} className={Asistencia.color + " col text-white border"} />
                        <input className={Asistencia.color + " col text-white border"} placeholder={Asistencia.estadoAsistencia} />
                    </div>
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
                    <div className="container-fluid row h5" key={index}>
                        <input type="number" placeholder={Asistencia.numFicha} defaultValue={Asistencia.numFicha} className={Asistencia.color + " col text-white border"} />
                        <input type="date" className={Asistencia.color + " col text-white border"} defaultValue={Asistencia.fechaAsistencia} />
                        <input type="text" placeholder={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} defaultValue={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} className={Asistencia.color + " col text-white border"} />
                        <input className={Asistencia.color + " col text-white border"} placeholder={Asistencia.estadoAsistencia} />
                    </div>
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
                    <div className="container-fluid row h5" key={index}>
                        <input type="number" placeholder={Asistencia.numFicha} defaultValue={Asistencia.numFicha} className={Asistencia.color + " col text-white border"} />
                        <input type="date" className={Asistencia.color + " col text-white border"} defaultValue={Asistencia.fechaAsistencia} />
                        <input type="text" placeholder={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} defaultValue={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} className={Asistencia.color + " col text-white border"} />
                        <input className={Asistencia.color + " col text-white border"} placeholder={Asistencia.estadoAsistencia} />
                    </div>
                ))
            )
        }
        /*  */
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

            /*  */
            return (
                AsistenciaFichaDesc.map((Asistencia, index) => (
                    <div className='row h5' key={index}>
                        <input type="number" placeholder={Asistencia.numFicha} defaultValue={Asistencia.numFicha} className={Asistencia.color + " col text-white border"} />
                        <input type="date" className={Asistencia.color + " col text-white border"} defaultValue={Asistencia.fechaAsistencia} />
                        <input type="text" placeholder={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} defaultValue={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} className={Asistencia.color + " col text-white border"} />
                        <input className={Asistencia.color + " col text-white border"} placeholder={Asistencia.estadoAsistencia} />
                    </div>
                ))
            )
        }
        /*  */
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
                    <div className="container-fluid row h5" key={index}>
                        <input type="number" placeholder={Asistencia.numFicha} defaultValue={Asistencia.numFicha} className={Asistencia.color + " col text-white border"} />
                        <input type="date" className={Asistencia.color + " col text-white border"} defaultValue={Asistencia.fechaAsistencia} />
                        <input type="text" placeholder={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} defaultValue={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} className={Asistencia.color + " col text-white border"} />
                        <input className={Asistencia.color + " col text-white border"} placeholder={Asistencia.estadoAsistencia} />
                    </div>
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
                    <div className="container-fluid row h5" key={index}>
                        <input type="number" placeholder={Asistencia.numFicha} defaultValue={Asistencia.numFicha} className={Asistencia.color + " col text-white border"} />
                        <input type="date" className={Asistencia.color + " col text-white border"} defaultValue={Asistencia.fechaAsistencia} />
                        <input type="text" placeholder={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} defaultValue={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} className={Asistencia.color + " col text-white border"} />
                        <input className={Asistencia.color + " col text-white border"} placeholder={Asistencia.estadoAsistencia} />
                    </div>
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
                    <div className="container-fluid row h5" key={index}>
                        <input type="number" placeholder={Asistencia.numFicha} defaultValue={Asistencia.numFicha} className={Asistencia.color + " col text-white border"} />
                        <input type="date" className={Asistencia.color + " col text-white border"} defaultValue={Asistencia.fechaAsistencia} />
                        <input type="text" placeholder={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} defaultValue={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} className={Asistencia.color + " col text-white border"} />
                        <input className={Asistencia.color + " col text-white border"} placeholder={Asistencia.estadoAsistencia} />
                    </div>
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
                    <div className="container-fluid row h5" key={index}>
                        <input type="number" placeholder={Asistencia.numFicha} defaultValue={Asistencia.numFicha} className={Asistencia.color + " col text-white border"} />
                        <input type="date" className={Asistencia.color + " col text-white border"} defaultValue={Asistencia.fechaAsistencia} />
                        <input type="text" placeholder={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} defaultValue={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} className={Asistencia.color + " col text-white border"} />
                        <input className={Asistencia.color + " col text-white border"} placeholder={Asistencia.estadoAsistencia} />
                    </div>
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
                    <div className="container-fluid row h5" key={index}>
                        <input type="number" placeholder={Asistencia.numFicha} defaultValue={Asistencia.numFicha} className={Asistencia.color + " col text-white border"} />
                        <input type="date" className={Asistencia.color + " col text-white border"} defaultValue={Asistencia.fechaAsistencia} />
                        <input type="text" placeholder={Asistencia.nombreAprend + " " + Asistencia.apelliAprend} className={Asistencia.color + " col text-white border"} />
                        <input className={Asistencia.color + " col text-white border"} placeholder={Asistencia.estadoAsistencia} />
                    </div>
                ))
            )
        }
    }
    return (
        <>
<nav className="navbar text-uppercase navbar-expand-md shadow p-13 mb-15 bg-body rounded bg-white">
  <div className="container-fluid">
    <a className="navbar-brand" href="">
        <img src='./Logo.png' className="d-inline-block align-top"/>
    </a>
    <button className="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span className="navbar-toggler-icon"></span>
    </button>
    <div className="collapse navbar-collapse" id="navbarNav">
      <ul className="navbar-nav navbar-right ms-auto  mb-2 mb-lg-0">
        <li className="nav-item">
          <a className="nav-link navbar-brand text-back btn btn-outline-white " aria-current="page" href='/create'><i class="bi bi-plus-lg"> Crear</i></a>
        </li>
        <li className="nav-item">
          <a className="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href='http://127.0.0.1:8000/admin'><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
        <div className='row'>
            <input type="text" 
                onChange={this.onChange} 
                placeholder="Buscar" 
                className='textfield' 
                name='busqueda' 
                value={this.state.busqueda}/>
            <button type='button' className='btnBuscar'>{" "}</button>
        </div>
        <div className='container-fluid'>
                <div className="row">
                    <div className="col"><button className='btn btn-primary w-100 text-white' onClick={(e) => {
                        if (OrdenAsistencia == "FichaAsc") {
                            setOrdenAsistencia("FichaDesc")
                            document.getElementById("flechaFicha").className = down
                        } else {
                            setOrdenAsistencia("FichaAsc")
                            document.getElementById("flechaFicha").className = up
                        }
                    }}>Ficha <i className={down} id='flechaFicha'></i>
                    </button></div>
                    <div className="col"><button className='btn btn-primary w-100 text-white' onClick={(e) => {
                        if (OrdenAsistencia == "AsistenciaAntigua") {
                            setOrdenAsistencia("AsistenciaReciente")
                            document.getElementById("flechaAsistencia").className = down
                        } else {
                            setOrdenAsistencia("AsistenciaAntigua")
                            document.getElementById("flechaAsistencia").className = up
                        }
                    }}>Asistencia <i className={down} id='flechaAsistencia'></i>
                    </button></div>
                    <div className="col"><button className='btn btn-primary w-100 text-white' onClick={(e) => {
                        if (OrdenAsistencia == "NombreAsc") {
                            setOrdenAsistencia("NombreDesc")
                            document.getElementById("flechaNombre").className = down
                        } else {
                            setOrdenAsistencia("NombreAsc")
                            document.getElementById("flechaNombre").className = up
                        }
                    }}>Nombre <i className={down} id='flechaNombre'></i>
                    </button></div>
                    <div className="col"><button className='btn btn-primary w-100 text-white' onClick={(e) => {
                        if (OrdenAsistencia == "EstadoAsc") {
                            setOrdenAsistencia("EstadoDesc")
                            document.getElementById("flechaEstado").className = down
                        } else {
                            setOrdenAsistencia("EstadoAsc")
                            document.getElementById("flechaEstado").className = up
                        }
                    }}>Estado <i className={down} id='flechaEstado'></i>
                    </button></div>
                </div>
                    {mostrarAsistencia()}
        </div>
</>
    )
}

export default Lista