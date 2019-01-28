# Timestamp-Layer
Simple Layer for other entities to extend when you require certain shared variables

To use the classes here you have to add to the entity that uses the traits.
````
@ORM\HasLifecycleCallbacks
````
And in composer.json
````
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/zenchron-dynamics/Timestamp-Layer.git"
        }
    ],
````