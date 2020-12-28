function jumpingOnClouds(c = []) {
    if (!c.length) return null;
    if(c.length <= 1) return c[1] === 1 ? 0 : 1;

    let searchingForJumps = true;
    let amountOfJumps = 0;

    let currentPointer = 0;
    let jumpPointer = currentPointer + 2;

    while (searchingForJumps) {
        if(c[jumpPointer] === 0) {
            amountOfJumps++;
            currentPointer = jumpPointer;
            jumpPointer = currentPointer + 2 
        }

        else if(c[jumpPointer] === 1 || !c[jumpPointer]) {
            jumpPointer--;
        }

        if(jumpPointer === currentPointer) searchingForJumps = false;
    }

    return amountOfJumps;
}

const testCase = [0,0,1,0,0,1,0]

console.log(jumpingOnClouds(testCase))

// notes / thoughts
// can jump on 0... can not jump on 1
// can only skip / move two spaces at a time (example: [0] => [2])
// looking for shortest path!!! => always try to skip farther if not blocked

// edge cases
// always possible to win game