const memories = [
    {
        id: 1, 
        text: 'lost left eye',
        isLiked: false
    },
    {
        id: 2, 
        text: 'had 3 kids',
        isLiked: true
    },
    {
        id: 3, 
        text: 'lost mamma',
        isLiked: false
    }
];



// high order array methods
// forEach, map, filter

const memoryDisliked = memories.filter(function(memory) {
    return memory.isLiked === false;
}).map(function(memory) {
    return memory.text;
})

console.log(memoryDisliked);