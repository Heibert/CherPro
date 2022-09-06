import './App.css';

import	{BrowserRouter, Routes, Route} from 'react-router-dom'

import Lista from './components/Lista';
import Pruebas from './components/Pruebas';
import CreateAsistencia from './components/CreateAsistencia';

function App() {
  return (
    <div className="App">
        <BrowserRouter>
          <Routes>
            <Route path='/' element={<Lista/>}/>
            <Route path='/create' element={<CreateAsistencia/>}/>
            <Route path='/pruebas' element={<Pruebas/>}/>
          </Routes>
        </BrowserRouter>
    </div>
  );
}

export default App;
