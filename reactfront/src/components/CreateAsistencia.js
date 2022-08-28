import axios, { Axios, AxiosError } from "axios";
import React, {useState} from "react";
import { useNavigate } from "react-router-dom";

const endpoint = 'http://localhost:8000/api/asistencia'
function errores(props) {
    <h1>El error fue: {props.errorAxios}</h1>
}
const CreateAsistencia = () => {
    const [fechaAsistencia,setfechaAsistencia] = useState('')
    const [estadoAsistencia,setestadoAsistencia] = useState('')
    const [idAprendiz,setidAprendiz] = useState(0)
    const [idTematica,setidTematica] = useState(0)

    const navigate = useNavigate()
    
        const store = async (e) => {
        e.preventDefault()
                await axios.post(endpoint,{
                    fechaAsistencia: fechaAsistencia,
                    estadoAsistencia: estadoAsistencia,
                    idAprendiz: idAprendiz,
                    idTematica: idTematica
                })
                .then( () => {
                    navigate('/')
                })
                .catch(function (error) {
                console.log(error)
                const errorAxios = <errores errorAxios={error.data}/>
                
            })
            }
            console.log("exterior",errores)
        
    return (
        <div>
            <h3>Insertar la asistencia de una fecha especifica</h3>
            <form onSubmit={store}>
                <div className="mb-3">
                    <label className="form-label">Fecha:</label>
                    <input  
                    value={fechaAsistencia}
                    onChange={(e)=> setfechaAsistencia(e.target.value)}
                    type='date'
                    className="form-control"
                    />
                    <label className="form-label">estado:</label>
                    <input  
                    value={estadoAsistencia}
                    onChange={(e)=> setestadoAsistencia(e.target.value)}
                    type='text'
                    className="form-control"
                    />
                    <label className="form-label">Aprendiz:</label>
                    <input  
                    value={idAprendiz}
                    onChange={(e)=> setidAprendiz(e.target.value)}
                    type='number'
                    className="form-control"
                    />
                    <label className="form-label">Tematica:</label>
                    <input  
                    value={idTematica}
                    onChange={(e)=> setidTematica(e.target.value)}
                    type='number'
                    className="form-control"
                    />
                </div>
                <button type="submit">Crear</button>
            </form>
        </div>
    )
}
export default CreateAsistencia