window.addEventListener('DOMContentLoaded', () =>
{
    const search = document.querySelector('#search')
    const tableContainer = document.querySelector('#result tbody')
    const resultsContainer = document.querySelector('#resultsContainer')
    const errorsContainer = document.querySelector('.errors-container')
    let search_criteria = ''

    if(search)
    {
        search.addEventListener('input',event => 
        {
            search_criteria = event.target.value.toUppercase()
            showResults()
        })
    }
    const searchData = async () =>
    {
        let searchData = new FormData()
        searchData.append('search_criteria', search_criteria)

        try 
        {
            const response = await fetch('buscar.php', 
            {
                method: 'POST',
                body: searchData
            })
            return response.json()
        }
        catch(error)
        {
            alert(`${'Ocurrió un error al realizar la solicitud. ERROR: '}${error.message}`)
            console.log(error)
        }
    }

    const showResults = () =>
    {
        searchData()
        .then(dataResults => 
            {
                console.log(dataResults)
                tableContainer.innerHTML = ''
                if(typeof dataResults.data !== 'undefined' && !dataResults.data)
                {
                    errorsContainer.style.display = 'block'
                    errorsContainer.querySelector('p').innerHTML = `
                    No se encontraron resultados en la búsqueda: <span class="bold">${search_criteria}</span>`
                    resultsContainer.style.display = 'none'
                }
                else
                {
                    resultsContainer.style.display = 'block'
                    errorsContainer.style.display = 'none'
                    for (const iterator of dataResults)
                    {
                        const row = document.createElement('tr')
                        row.innerHTML = `
                        <td>${usuario.Rut}</td>
                        <td>${usuario.Nombres}</td>
                        <td>${usuario.Apellido_paterno}</td>
                        <td>${usuario.Apellido_materno}</td>
                        <td>${usuario.Dirección}</td>
                        <td>${usuario.Teléfono}</td>
                        <td>${usuario.Clave}</td>
                        <td>${usuario.Tipo_Usuario}</td>`

                        tableContainer.appendChild(row)
                    }
                    
                }
            })
    }
})