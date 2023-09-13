



const url = import.meta.env.VITE_APP_URL

const addSection = (form:FormData)=>{

  return  fetch(url+'/api/section/', {
        method:'POST',
       body:form

    })
}
const addOption = (form:FormData)=>{

    return  fetch(url+'/api/option/', {
          method:'POST',
         body:form

      })
  }

  const addEleve = (form:FormData)=>{

    return  fetch(url+'/api/eleve/', {
          method:'POST',
         body:form

      })
  }
const getSection = ()=>{
    return fetch(url+'/api'+'/section');

}
const getOption = ()=>{
    return fetch(url+'/api'+'/option');

}
const getEleve = ()=>{
    return fetch(url+'/api'+'/eleve');

}

export {addSection, getSection, getOption, addEleve, addOption}