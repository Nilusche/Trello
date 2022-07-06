import gql from 'graphql-tag'
const BoardsWithListsAndCards = gql`
query($id:ID!){
    board(id:$id){
        title
        color
        lists{
            id
            title
            cards{
                id
                title
                order
            }
        }
    }
}
`




export{
    BoardsWithListsAndCards
}