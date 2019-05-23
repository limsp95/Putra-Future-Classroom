
## Demo for AWS Rekognition

Using API endpoint for Amazon's Rekognition services (specifically face search). Inside `import.js`is the code for loading a local folder of face images into an AWS image collection. `index.js` starts the localhost:5555.

But first...


Node Package Manager is needed. All other
dependencies (especially to install the AWS SDK for Node.js) can be installed with:

    npm install



Set the collections u want to upload

    module.exports.collectionName = "ArcherFaces";
    module.exports.region = "us-east-1";

## Run

Put some images in `faces`. Run node import.js to import them to AWS Then : node index.js

Upon hitting submit you should see the raw JSON result from AWS. If it successfuly matched the face, then you'll see that the ExternalImageId matches the name of the original image that you indexed.

