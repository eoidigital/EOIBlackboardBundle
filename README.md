# EOIBlackboardBundle

A symfony2 bundle to communicate to Blackboard's API.

Installation
------------

### Step 1: Using Composer

Install it with Composer!

```js
// composer.json
{
    // ...
    require: {
        // ...
        "eoidigital/eoi-blackboard-bundle": "dev-master",
    }
}
```

Then, you can install the new dependencies by running Composer's ``update``
command from the directory where your ``composer.json`` file is located:

```bash
$ php composer.phar update
```

### Step 2: Register the bundle

Enable the bundle by adding the following line in the `app/AppKernel.php`
file of your Symfony application:
```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new EOI\BlackboardBundle\EOIBlackboardBundle(),
        );
    }

    // ...
}
```

### Step 3: Configure the bundle

``` yaml
# app/config/config.yml
# You can get these parameters from your Blackboard Admin Panel > Building Blocks > Proxy Tools"
eoi_blackboard:
    proxy_tool:
        password: yourPassword
        clientVendorId: yourVendorId
        clientProgramId: yourProgramId
        loginExtraInfo: ~
        expectedLifeSeconds: 2
```

### Step 4: Configure BeSimpleSoapClient

``` yaml
# app/config/config.yml
# You can get these parameters from your Blackboard Admin Panel > Building Blocks > Web Services"
be_simple_soap:
    clients:
        UserApi:
            wsdl: https://your.blackboard.domain/webapps/ws/services/User.WS?wsdl
            classmap:
                UserVO: EOI\BlackboardBundle\VO\UserVO
                UserExtendedInfoVO: EOI\BlackboardBundle\VO\UserExtendedInfoVO
        ContextApi:
            wsdl: https://your.blackboard.domain/webapps/ws/services/Context.WS?wsdl
```

LEGAL DISCLAIMER
----------------

This software is published under the MIT License, which states that:

> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
> IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
> FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
> AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
> LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
> OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
> SOFTWARE.
