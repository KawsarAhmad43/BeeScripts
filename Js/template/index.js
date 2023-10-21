const name="kawsar ahmad";
const age="21";
const job="Jr. Software engineer";


const city="Dhaka";


// template literals

let html;
html=
`
<ul>
<li>Name: ${name}</li>
<li>Age: ${age}</li>
<li>Job: ${job}</li>
<li>CIty: ${city}</li>
</ul>

`


document.body.innerHTML=html;