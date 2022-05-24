class Proposal {

    //Method for the modal to delete a proposal
    static deleteProposal(proposal) {
        document.getElementById("proposal-title").innerHTML = proposal.title;
        document.getElementById("proposal").value = proposal.id;

        $('#modalDelPropostals').modal({
            backdrop: 'static',
            keyboard: false
        })
    }

    //Method for the modal to pass a proposal to a project
    static passToProject(proposal) {
        document.getElementById("proposal").value = proposal.id;

        $('#modalPassProject').modal({
            backdrop: 'static',
            keyboard: false
        })
    }
}