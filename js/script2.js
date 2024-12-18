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



for (let memory of memories) {
    console.log(memory.id);
}

// high order array methods
// forEach, map, filter

memories.forEach(function(memory) {
    console.log(memory.text)
});