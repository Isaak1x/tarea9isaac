@extends('adminlte::page')

@section('title', 'Valorant')

@section('content_header')
    <h1>Valorant</h1>
@stop

@section('content')
    <h1>Valorant</h1>
    <p>Esta es la página del videojuego Valorant lanzado en el 2020.</p>
    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBQVFBcUFRQYGBcYFxgYGhoXFxoZGhgZFxgaHSEXGhoaICwjGh0sHhcZJDYkKi0vMzMzGiI4PjgyPSwyMy8BCwsLDw4PHRISHjIpIykyNDQ0NTQyMjIyMi8yMzI0MjU0MjIyMjI0MjI6MjIyMjIyMjIyMjQyMjIyMjIyMjIyMv/AABEIAKcBLQMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAQMEBQYHAgj/xABDEAACAQIEAwUFBgUBCAEFAAABAhEAAwQSITEFQVEGImFxgRMykaGxB0JSwdHwFCNicuGCFTNDkqKywvEkFiY0Y+L/xAAaAQACAwEBAAAAAAAAAAAAAAACAwABBAUG/8QALBEAAgIBBQAABQQCAwEAAAAAAAECEQMEEiExQRMiMlFxBWGBkcHwQqGxM//aAAwDAQACEQMRAD8AkUTRSVmPWBRRRUCCiiioQpON8P3uIP7x/wCX61RkVt6zPFuH+zbMvuN/0np5dKZCXhjz4v8AkitpKUikNMMjQhpK9GkNQFo8Uhr3XmKgLR5pK9UkVAWjzQRSxUy3bRQe6blwbj7if3Rqx02nTn0qd9AukrZCoqU2JuEgEKY2UouUDyjQeNNvb3aMo6HbXkCfz8tTRODQEckJOkMxRSxRFCMoKUCilqFpBS0AUtQJIUUsUgr0KgQUCilqFhSigV6qBJBUvh2DN1o2Ue8fyHiaZw1hrjBV3PyHU1q8Nh1tqFXlz5k9TS5yo0Yse52+j2igAACANAKWiikm4KKKKhD1SUtJRAhRRRUCCiiiqIFebtsMpVhIIg16oqAmRx+ENp8p1G4PUfrUUithjcKt1Cp33B6HrWUvWijFWEEU2MrMWXHtfHQzQaU0hpghoQ0leqSoDR5ikivUUBCaoGhm6xCll0I59OWnjJEUzgMY1vnoSA2k6dfOr65w0m2FKsJhjpqfE6aeA8ZrOYvBXLblHUghc3+nXv8AgND5UUJrwzanHJNPw0fDMTacm4y5UUZ3kFi2pAXujUSJI8PGovGDbIVkLZX97MCO8SCDB2EPt0AqHb4obUqCAMoA9nBXcHNPPYD5VKxdy5iCCQCIVbYSMoLzJIE97ujSaNz9ZmhBydIZddEb8SCfNSVPzWfWm4qficK1u3aRozD2hImYBYR8dT61GwtvPdtW/wATif7RqfiAR60lPg6Li1SffH9jVelXxjxM/lQRrRRFpCkUCilFQsBSigCioWLSikFe6gSEFekUkgASToBSVoODYDKPaMO8dh+EHn5mglKhuPG5OiTw3BC0v9R94/kPCpdFFJbs6EUkqQUUUVRYUUUVCHqkpaSiIFFFFQgUUUlUQKKKKogtV/FcB7Rcy++u3iPw1PpHaATBMAmBuY5CrToCSTVMxZFeTVXj8e1y8xUOpJ2O58wNAaQXLqmSDsRr0P7mnpM4stTFOqLQ0U5c32iQDp4gHl502ag6hKds3CplSQRsRoabqDcxbI7KQDBnoYOoj0NXVgSmocs1OE7QOIVwG/qOh9Y0NLi+L22uEpbBzBbZdp93NMKOW/06VmrWNVuTD0n5inrWLZZdFTMv42By+IVTv0Mnyqvhoj1KrllVjUHtGVTlAdlg8srEaQNRpWl4fibf8LmQgMCyomYZhJILt1YjXwqkw3DXuuSXEmXMCPM6iNz86k2OH27bhSmYnTNmkg+C6T66UThaMUM+yTaQ7dvAszMwkyYnXQbfKKgWbktnJAcFGSeqtOWfzNaHitu1atFVdi0AG2RlZWOoz9RtrWSdu6RHPfwo9lcFSzOfJe4hIdh46eR1HyrwoHP5U69qEsnfNZttPpH5U3FAb/3A0UUAVAqAUtFLULoK9UVM4bgjcb+ke8fyHjQt0FGLbpEng2AzH2jDujYfiI5+QrQV5RQAABAGgHQUtJk7OjjgoqgooooQwoooqECiiioQWiiiiIFFFFUQKSlpKhAoooqiBQROlFFQhhuM4FrV4+zQnP35OvnB56wY/qpcmZJMT4f+q0nH8Lnthxuhnc6qdxA35H0rMve1YAEEjKPBiRBPwj18KdCXFHA1mHZkdddjiWiqLII3Akct9Ou9JFPYLCM9sH2za6xAIBBI0kaDU/GlGDZS2a5MLmAyROoHvTvqTtyo3FrkmHNFpR9GKicWtibbbZ7bITyzIdPkVqbFeOI5f4Zw26ujJ5k5SPh9KkXyOyw3Qf8AvQ9wu4nsxb0BHvTod/8ANWiWLd9s/s1FtBCgD3oHvHnEbD1NYqwWZ1Ak6HTecqlj8gavbXFiLeQMwEagaA+ZG4inxkr5OPOL7Lg8PsgyRHgxJ+AMmpSXcMhUmIG+W3y3jXxis9/FsQDEA7EzrUfFXrkBo01Eii310gasl9p8St249xLZRXBgEzmjQmTty05QKp+G4A3AZuBABoCGJdo91YG/z8DV42NV8F7IJmYMz5tolQCB8PWs7gcY1ppUmY5gGDyiaW5W7LhJ0zRWFuXbaILZJtLl00OXSAQTr5j4czGAqRwXFP7C8sQZUlwoWVMLl0G86+TUzFJ9Z2MNvGm3bEAp98K4XPllfxLqPWNvWKarQ8Dw7WwWJILRCj6n9KZCO50VmyfDjuM6KWtBxmzZIYggXRB00zaxBG061EXgN2JOVfAkz5aCpKEkyoaiEo23RX4bDtcYKu5+Q6mtXhrC21CLsPmeppnh2CFtf6j7x/IeFSprPO/Tp4FCrTTCiiilmkKKKKhAoooqECiiioQWimcJiluoGHqOh6U9RFJ2rQUlBNNveie6THp9aiTfQueWEPqdDlFIjyJpaoNOwoooNUEeWuAac+g1PwFLbw125qBkXrEk+U6fAGncDeFppKhkJEyJYcpB3I12NafBLJ3kbjnvQ3zRjzZpQKHD8Gtkd8ZzrJfUegJ0ql7Y8NsW7eHUIEUs6d0BdSbercyMouCd5I1rfcXxqYdASil291RpPVmG0CuY8axb38RDx3FzGORfkOQ0A+NMxxe9I5+ablByPGFtIq5becjfw+LU8+AZu83QzHIa+GulTLSFEBb1Hh1p220iOUj4b/lXQ2rpnNTd2iqu8KyjczlJHmBOXz0qh4u4VbY8WJHIiFGvjP1NdDwVkMwLagax+VYDtkiW8Q1pGlUPL+qGj4FfhWeTW+kb5Sl8D5u2QOGqLl1TbK2WtrmJJLZiuhIGkkz7vnSeyi8ysIBOZRsCDtHz9Qal8HsRbNyNXaB/av8A/X0qVi8Kblh3HvWWVx/Y0hh5aBvSpu5A+Buxfv2Q7l46LyEmPEx+Qrybp2JMchTU6z11paO3RzzU4bDW2wftI1U5D0BEa1j8ZZysj8iMp810+n0rUYS4Vwl1J0Ps2I8Rm2qlx6TaPUAN8NT8pqvQ9Lj3KZZdnMYk3LNz3b9plH9N1B3H9Yj4UwKq8AgJVuY1B5gjYg9Zq8a3KC54w3nr3h4GD5GfCqnH02aTLFfI+/BpDBBiY5fr4VdLii1tSDllWzHxTePE71SxTvt1VRn91WLHxBCjKPOI9aGMnF2jZlxxlH5iZw9wzgsBCEMBH3j94nnEVfW8cDmIDaQBP3iZ2+FYVbjE6OB/bLH5b1c8O4gbejQV3kcj1I3FaYppHLnJTfVFxj7zC3EgOZJ6mBMDpAG/rTuGu5lB+NVlyLjhgAWIgQRtB8dRrU7BWionqdv341nyPdF34btC5QmqXD7JVFFFZTuhRTCYpSxQbgH/AKTBGtOFz+E/L9atprsCOSMlaPdeFvIdMwnxMbVHuY0LurDxKPHxyxVPeuZrhZLiOCSQttxmU6xI6TvrTIQT7MOq1bgkod/ui9t3ZdgDICqfUlv0FPVTYO6bbk3LloyoEB9QQT0HiasVxSn/AACfyoZQp8DMGrjKC3Pn8Mo+AY60jn2hcKwgMkFQerpEkeRka71pAwOqsGHIqZB8QawOHU5jkBAJEASfMR8dKs+EYr+ZFtyV3dACdPxR0GmvTnWmeJSXHZzMGunik1N2v/DSY5LhQez1OYCIkmZOnj3fOqy44uKVz3CVEknMF2mCdATUm1jwwCFgFEQ0xBG0nyJFQsViGQi2dXJIA6qCe8Y0iIqtsYxX/YjLmeXI5NV1RO4Ve7uUmSCRr4ax9fgasKoxct2oUvDvqBoBv8h3qsrFyPenrqN/zpMoPs6uk1cWlBkqigUUo6Q9wtgMSmYBlIEBhImYP1Fbe5fVZdoAUSTsAFrJ8Awmd/aHYaLP1/P4V77eYgpgLo/qtDzBu25HwkUCdyo5Oqac7M9xjtHbuXmbNqSAIEqi8lB25yT1JqBZW2tx7mfOXIY+BiAmw2AHrNZlNULTrMAdSdqseGyfan/9rH5CteKKi79MObK5x29JF3dx0zMEHaJ00+91r1w24c2Q9DH7+NRlwreA9adw6BHUltZ+ulP9sVF3wLxzjJw6wgBdpAnkFIlo5+9WHxb5yzH3jr8TV32wn2yDpaEebO0/ICqjDWDcuLbH3jqRyUCSdegBoOE2wpOUmo/0XuGM2bWkdwCP9TflFecTfC2/Zq3+8Aa6V1hATlt+ZMk+g60xxvGC2otoILLAj7qiBA8Y0nwPPbOK+WCPkY9JFDFLtmjUZnFbI91TLNSBoPSlNereKYKFZQVGsZZgmfvbzuNTSl7bAmCoAEwcw5AnXXfWnXxRzGmT2vg22UHZRP5UrKCCOREehpnDWwl4IWV1YRmQyGVhMipDWyjMh3QlT6UuRq0MkpSj9+Sowzm2TbYazKnr/g1qcMM1nTnp5Hcf9QNU2LwwuLGzDVT0PTyNP8Bx+UNbcEyCAoic45anbT5UV7lQGfE8ORSj97HMtM458iiVBzAxMEaaH1qfhiL7HIMpDQwO6z97TkdfUGpvFuEI1tcsArOpnUAE/GdaSnUqZ1mnkxOUTHfxMbCI6AfnV5wvDZ19pcZo5AGD66fv5U3wrBIbnfA0iAR7x3qVjsTetFisQ5yh5kKDyy/+x509N9nJaV0SVwrWv5lpjqNrhGR9dpgZW0/WrDhnEUvKSujLoyndT+njVRhcEnvXCbjHqTEeAFXj4RZVl7rKIBHNfwt+JfPz3pGWSZ1dApc10vPz9iRRRRWc6pR4XHZr6j7pDZT1Os+n+OtWONxy24kEk7BRJ0pBZsG4G73tldv5ZHcCFR/OXSJJCiR1NQeP3XQqVMSpmNzB2npr86dOPzK/Uc7DOUMMq8bXKPGI44pUiXtXB1UMJ/CZB+g86y1+/dZSgfu52uZSAO827SNR5VeY9QbK3D7yLJ5yp3U9dJqqxOEgZ0On0H6UUag/yc/Nlll78LHs5xI+2c3QwuXAiAqoywgge7rJnpGla6sRwLFW7V0NdnYgECQCeZ/fOtqjBgGBBB2I1BpeVc2dP9Pkni28cHP3QF+YJI05N5HrU1MWpHs5g8hrlMdJGp89acsJozHZVJ/1cvnVJik1J20BrZjlt5OJqIrdVlv7XKZn0iflzFLiuKaL3QCBCgTz1iDqKqcNimMSfCf1qPjbupEyx3I2A/CKmVxfgqNoTE4pnJkyeo6+dX2I4wxW3DMGgEkfdYqQY677VnUBGwgfPz86tsDgSQGaYPhp8Tp9aUotsfE1WD49baAxynqdvMnkatrds3GCLrMT4g8v18POskuDEzOpgDQeUaaV0jspw5bdsEakafqfl9Kz5I7XR1sepm8bbL7BYQW7YAGoIk+czWX+0URgjP3rqL6QSPoa2+GXunTnWK+1WFw1pJ3ulv8AlT/NDCPph3tyaZyOyTmQf1L9a1GGuAg90CSAByAUAaH0NZnDIWuKAJJYfLX8q0uGaLYJiD3p0nvEtr8a1xMkiW9wnQECmLiAKTm18aYu44aKOu5ECncPaJ79zr3V6mrlKkHig2yh447G4Mx1W2oHlLEfWrLspg8qm8d2ML/aDqfUj5VScQvm5cut/VHond/Ka0mDuC3YTXQW83wBYmgfQ7Gk5tmTe+1y67xMkgDcBdQBr4fPWjF8Oe3qwHpTnB00B8D8dq1nH8EsSAcj20ua7jMsmPIz8KfHHcLMU53K2Y+3iGG4nr4x4Hyp7N7QMtuC5YGDlXuiSdzG4E+VNrbgwdx059DTj2wdx+/Ol2U2V13RoGhXTQ89zqPGa0F+6VCXILK6jN/cDBAIGnI/6qrUwrQQo7piZIUGDPvEitBe4IyYM4g9xkKZVGodV1zyAI0G/enTWroF5Nsk0+RizfRwGQNHPMNjppOx3pjF4V83tlU5BozASAwBPejYkDSd4rb9o+DW8iXcNbVEI7yqCAXjNoOsHlpVx2P4YLav9/2igPI7oAmFg+9uaHpjMmtg9PbfzX0YfCcBxdy3bxOHDS4YaKyhU01ZmEasrCNRoDpMCY2Bx1sIt42zmOgdkQnQghWJAOh/ztXV17iZEAVQAAAIAA0gdNKwXbSx/MtGIQH2Yj7uZRA8BMfGqdGXTa3JKahF0mZR+5KmCT+FlaOREg6bfOoWKxWckEyYgch86sMZgTJI1AXMfIRr56imbfB1dM2ciZ3iKOLbOlkiorktrSq6hgNoP00NTsK5gqeRIB6ivfB8EtuwlxLitdDMjIxDLdQQQADv3SBHhTV3iIuX7q20By5CdcgGdAQANT1Hoak8a28uiabUzU1sVkqivCh+ZUeAk/PT6V7rG1Xp6OE3Jcxa/JEOF/nC7Onsykc5LAz5aUxxi0rZJE+9pMdP1qwDiSs6gAkdJ/8AVUnHbwZUZdQw0ae6Rqfyq498mfOorHJR/wB+5E4teT2RtiC2WNDMa7DqajYK2UAZx3YgxqNohulecOuZiS4hFnYAMeQEROp3NPnFrbXRgc06HXbTl1P0rQuXbOJNUSU4dbaHywDy1APp0pixj1wzOrSQTpHQE7+MEfCmL+Oy2xGYkKDqdA0ye7zG8elRf4QjVyQW1gH5mP3pTHBSXIqM3F2iZduKlmD7z6x6/SBWexF4OdjAMHxPJQOtPYvEMjajMWERPWNNN5H+NpqPYtwwUe+emuReZ6T4+nnVlSe6V+smYDCA65siAw7EjQfhUgasYPlpvUxHwyvHsA9sAkmAWgfeJbTnufzFRcVhJAgwFG3Lz8/Hc1CxKFVy+Os9RVXwXKDjKmaK1jLPu27aWp1zOqiP6ZiPX9i0v4lLds5zJMlQLgIaYgsIMc/lWJw7s2UCZJVdN/D5TWl4DgBfty7FRbZkAVVEk5WJYxLb7Haqc6Q3DieSSUR/AsGZNtWXbznpXRez9yBH4pHrNYO3w32Vy2cwKlwNoI0NXWL4n7K3lGrGYA8evQVkm7Op8JqO1nRMPeUTLKB/cP1rnn2uYxS2GVTIi6f+0VieK8ZvZsq3CkDXJ3d/Ea7eNM4k57FtrlwFzcunv3JYg+zGmbfVSKZCLVWc+dJuu0V2eCD0NXCMCqTOir9BVQrAEHQxrDbHz8K9JcuXCFV1kQO6dANBJA1NO6M3bLbIOUzVxhLbZRJ90c9lHnSYbhy219oc1xQBmuDWJ5wNl0OsHxNQuKYtnVrdlWICnbdidB6AmipehbpdIzFoEguGgsWPx1/StDjcWlm17Moc1y0YYkBctwEFl3LHXwqnxWFuILa5TrsY95jGgPmfpWgweEOJwAUibiZ/ZwJaUJhY8QCsdIpcuKsdgTkpJd1f9FLw17ajKASTt3gPTX9K0XFXe7hbUAjL3ddC6rJgciQTsDMcqyH8PctFfaW3tyRHtEZJ8swE1r1u58FdT8Jt3R4ENkb/ALgfWtmJ3FoxTXpmb9g+zNwSCrx/pIE/Mj501hhoCTJ8Tt5Va27mbD3A2/ehp10UHXry1+M1n0vL+IfEUhSpgxd2ifcTMQOZMT+ddBx7oMFZtjmpzDqqllH1PwFc7wOIXPqw2gajnWtx9/Kgk+5bA9Tr+dW5JuxOVcpF9wTjbYjDWrLWwFS2ii5mks9ubbEjlyj1rZ8JRVtKo5b+PjXHuznFriAEAZBErmnNG5iNDvqNRt1FdZwYA1tsSp2npS5OxGs0zx0/HyiTxfGizae5GYqCQvUxpPhXLb+PxOKuIrQTcbKBEAXPeVh/yxWq7Y8XKN7CR3llzpoCGAUeup9Ky+FxCqhI/wB4ty26MOWUOD5EEqfSrTSNGl0cvhPJXLqn+xJs4hJDNsUIiJ3y6Gs9x7CIEDoxIGhzcjyjwqyUs7hQNTOniTPoPoKpu0GMUkWgykKdwYLHbNvtqYoYp7uDtzlF4Fu78/yN9msSiG5nuKmiFcxjNqQQPESD6V0bs1etXZTIrOR3SVEsNZ72hImDzOmlcqs4EuZMhFIDHmCRIHhNPYtXw5D2rj2iIIy3CJPXQ1oi65aObO2vldPz9jruK4S/tALds5TzmQCNxMaCesGszxviow7XbeXNct8h7pGYLM7+O1QrXaDEFVZMRdh1Dx7VjGbcb8jI9KrfZTca4zszOCGLGZzTM9Zk/Gky+FJ3VHRhLWJVuTVfyHCuKXXzCAAzktdM5teQA3idBtVnxV7bWQiH3Mu45Du79dRUFAFAAAAGwAgCvealPlmmEdsGm7bIOGw7MCADqNOX132p0cMZoUjbqQPjE1ZcNce0BYiAGJJ20U7zVVeuIXYksRM+6dZ15x+xRRdGTPjUUnZJxHDgcoZ9CSpyAdNBrMjSPUU7iLERz0j4VS4e7LavAGolojfbXSpv+0W5N+/zo96sxuJnSCmu7nQAn3R8dT1PKrLhuGKg3G+8CF6sZALeCgSB1n4MYXh6lXLscwOQxrBzTAnwU1ZO400gKoUDoFFUx2DHzuZHxV/LGk6zExoPGoF5w5mesjzp/EsrGRqAI3ygyfHwmoBVh3o0O2u/50S4QGWW6baJ3BLT3LiBFkiHgtAhWXX4GPWtZw69bstkUnI7EmdQjGPdb7w6/Wspw7GLacuBMWmEHSXZtF+h8gamcOzexAYzlcjyBVYHyalyVmnSZFFqu+TqvZNJxds9Ax/6SPzqk+1fij2sUlu0QGa0GY8woJAjpJnXwp37NscTiUtNyVsp8ANjTXbvgt3F8YW1aHeaxaljsiBrmZ28BI05mBzqox4phavK1l3L1f5M12K7NPxLEd8ZbNsg3XUEZhuLamfePXkNelbP7Tu1i4a3/s3BwtwoFcpA9jajRB0Zl+CmdyDVxx/iljguCSxYA9owItgiSWPvX7gG4BM+JgCBtzbsZ2du8TxTG67NYR8967ENcdpPsw2+YkmTyGukrRGDst/st7Fm84xuJE2UP8tGURcdfvkc0Ugx1YdBrqvthIXCWDIH/wAkCOv8m73R8vhSfafxO9hbFjD2E9nZuMLb3FgBVWIsqB7uYT6KQOcePtruZcJh200xQ32/3N6rKvkm/ZcZ4e4M6Xbg15d1dIPiTXKDcSzbFvVnzKGCgZRCmFMjUd4knwiup/ZNcDcOdgZm9c18ciT+npXGFYQATmbKe9BIaIBYEjXUz11FD6hsJUn9zR8D4NcxmPt2x7q5nuNyS2IEj+okqAOvka69exWFwCi3bQZiJyqBJk+8x8TP6VnPsmtL/wDKf72a2niFVWI+ZPwqDxS6zXrhbcu3pBgD0AA9KmSVOzRosPxm4yfC5r7lmftGwhvNhcXZa2pgZ3yvaYNtn0lRyJggQZPOoPbHsklhHv4Zf5TqVe2uq2y40uJ/RmCyOWkabYvtngM1tboGqd1v7GO/o3/ca6J2QuG9wGLskCzftzMHJbNxVM8oCgT/AE0WLI+GhOqwfCm155+CL9jKRaxGoP8AMTbyYflTuO+1nB2rty02HxBa272yVW3BKMVJE3AYkVG+xlCq4xDrF22QTzDK0H1EH1rGcK7LHHcXxVpmy2reIv3LuoDFfbNCqN5ad+Q8Ym5KnTM6XB2Tstx9cdaN9LF23bzFVN0KC0blQrHug6T1npXF+0PEjd4jdtIoCjEOS85iwW593QAA7c96332i9o/4NLWAwym21xVBZQVFqyDlItn8RAIke6ATuRXL+HHPfe4dy6ifHNJ+oqgscFOaTR9DcZ4XbxNprLjRhoRupGzDxH+OdZ3hODawvs7pGZAFBnRgugYTyIAq47SYlra22X3hcEePdbTxmnOJ4I37Mhct3JKhjsxHusRymoZc6eVOC8MTwtieNnNr70dMvsdI/fWtR2v7ODFW8yAC8gOQ7ZhzQnoeR5H1rn/ZfGG3xFGxLFWzOjlvuuylQD0EwOm3KtbxztI2E4iqsSbNyzbDj8Jz3AHHiOfUeQqHS+HOO1R7SX8nLMTiDaW4CCLrE24OhQD3z4NqF+NdLwI/+3jA1/hbsT5vzqu+1TsqbyDH4YBmRZuqNc9uAfaLG5Ub9R4jWZgXP/00W5/wd0/99EqETm5V+xW9iO21jDYezg2tXXuj2jEoEy9+47bswIMHaK6Fd4wi4U4rI5QIXyALnIHICYn1r514Xca5ftW1JEtBjpBkj/TNdoxjMOB3SdCMNc2JMCW0nc6c6KSXYsoON9uMBjbTWmsX1dZKMVtyrCBMh/dM6jmPSsPNQMBftrAuSpKEZuU5gQT/AE5UAneSelTjS5xpnS0jWwXNQWrwTXkmqNFllgcMXt3XEAqFykidQwY6c9h8abTgxcS9xpMzsJ16Cp2GOWzl2kSfEsw/IAele8TiltW87EAASSZ6xGmpMnamY0mm2YNbL5kl9hi/w62lkoBMA6nfrVVc4QywbUQwBIOsHw260zju1SEFUR2mRJhRqIkDUn5Uzb7R4giFtJA6kz+9Kj2tmRXQDn4mT4k86RyIM7Rr60CmsU4C+JIgddQfpQHQlLbFsesYVQivKkuTC6llAJ3kRy6moXEkAgjx28CacAzQJGknaZ+FRcV97N4BRqII5x5Ux14YOSPhxLbx41p+CWQbN2dYfTzyEAn41mMMO8NRz+m1aPgd8+xuiO77W1B8S6A6nlEfGly6NGnaWT+Gar7NP/z7f9lz/trpvH+I4bA27uMuL3iqoY9+4VnJbHqzeAkk1wvBcYu4S8lyyVFwZh3lzDLEER8Ka7U8fxWOKe2cNl7qKoyqCxEmBz8egqJcE1DvJRatgcXxXFuUuHPc9/OpUWbJMZQNRAEiA0kzOpronH+KWOC4JMNhwPaspFpTqS33r9zrqZ8TA0G3M+C9r7+CS4loLndpzugYnJoAdQYgE/6qpOL8Wu4m61+8+d3gE7AADRVH3VHTxJ3JqLsVJJUde7E9orXFMO+CxkPdVdZge1RSIuLGzqYmOcHnA8/bhYLYC2w+5iEY+RR1+rCuLWMe9i4l60xW4jAqw3BH1BEgjmCRXU8RxPEYzCrbxJU50zNlULBZT9A3xFDKW0bg08ssml4Xn2N97hjRzvXfjlSsLhvs14mqAeyXUaj2tuJGg59KqeAdsMdgEfC2igCOzEMmY5tAxmdtAfWrnD/abxNmgva2P/CH60QmmmX/AGLd+H429axJVBdSzMOrBGLXMpYg92ZO/Ig7Vqe0PZt3c3bMHNqyyAZ/EpOmu8VzHhTm5cu3LjFme8pJbUsyqzfUitpgOPX7Iyq4ZRsrDMB5HceUxSpSVtM6enwZFFZMbV+p+jlrsnfuylxMiMCrFiDoRBgAmTR284pZwGAXh9j33ti2FmSlrZrjeLajxLE8jT2I7V4hhAyJ4qpJ+ZIrlPa7OMWzkljcCkkkklgAsk+QFXjcU6QOrx5pLfkrjxHUfsjINq63MraDeJT2ig/8qr8K5r2h4jdwfFr2IstlcXWcdCG95WHNTBBH5gU/wDtXjMLaZbN3DgRMMAX0LHKJAzas2k86qO1mLF6+t4f8W0twxyZmcsPQyPSnT5lZz41TO0X7eH43gVu24W6ubKTq1m6VhkaN1II8wVYagVyrC4F7DC1dUrcW531PIlvmIA151Xdm+0OJwdwthnCtcyowZcytroSvUE6HxPWt9x1nxOV2y+1QCGChZjWG66/ClylRq0eJyk2vEdXxVpDDvEIS8nYEA970E1mrPagPcFy2c1jVYiCddW11mRt0rnnFe1uMv22s3HAUnvBVCkwfdJ6Ty8Km9mcSWtlT9wwDyg6x6fQirsx6vBPFj3J82v6NR287NDEJ/FWBLhZcL/xEA3HVgPiNOQrnGO4g97IXbMURbYbmVUkjMeZ70T4Cugf7bu2LRC3FRRsXAIUnz8eVc5xWINx2uMFBcliEGVZO8DlUNegzPJHnw2fYjtqLd9cDfYBGRBac/duMJyMfwtmUDodOYjXdrcJbtcKxdu2oVBh70KNhIYwByEk+VcA7Q5TdAA19mgbzj9CKtcR2/wCIXMO2Fe4jW2T2bFkBcqRGrT70c6Yo8JozZX87/JS8KxpsXkuDUKdY+8p0YecE+sV3viEPwW5khlfDOV6EMCR8jXz5bwxZGcfdj1netz2Z7cXFwpwlwjIiZUhNSn4Ces8+nlR1u4FyTXJl8TbJhYiO7JGnvE/+XzqwtplUL0AHwFW9niyklVBVWkxpKklTKHzRTEcqiYzB5e8pzKdoBBHgR1qZIPw06OcU2n2Qya9WLeZgvU/Ln8qbqVgDDFjsqk/l+dIN7ZZs8yBtmC/AT+fyqu7R620Tq8/AH9an8PWbZJ3zFv38DUHja6oemY/SnKNRo5OWe6dmcxNhUbTSeXj4eFPWbcDXc/Lzpu8TnUjr8B1qdMgUNFWNg0zi0BHj+X7+lFFAjXk+kRFy6Dy/xR7AN7XNMrZNxR1IAEny6UUUb+kzx7KxBAmtDwm8hwr2iNZk6aHM2nyWiigkNwfWRUabjneFj4H8z9KjtJdVB5g9P3zooo/BWT62PYu2QrsGDcicsHvZtNdojdY3qD08qKKCPbLn4JhsL7S/aTcOwB5aTr8q6pFFFKy9nW/TEtsvyYbtvg/Z3Uvrs+jDxUfmunpVUGAhlPlRRRY+jDrIpZpUWHDeJt7RRlEFidJnNEzvt3QIreq0gHrrRRS8nZ0P01twdi1k+1aj2iE7hZHrIPzy0UVUPqHa3/4sp8bdtG2Ytw+mukCNTEazIj1NRuKCPZj8Ni0D5sC//nS0Vol2cOP0skcOv2zcskDvKe8I0kjL695gfSui0UUmfZ1P0z6H+Sp41gpBuLuPe8R186s7Ttbw4AIVhbmYkTE0UUUOjH+rpXH8maxuMuXcrMeWg5eJios0UUZqjBQjUSh4j3r7/wCn5Iopi4lFFPj9Jx8n1v8ALLjhtrLbH9Wp9f8AFVir7O6V5A/IwR8iKWigj2zVmS+Gi2nn5fv5VZ2Me9p5HeXSVO2w1HQ670UUWXwHR8SZDxBXMxX3SSR5E7V7Rotn+po9F1+rD4UUUuPaNOdvYy64cvc9B+v51V8e3Uf3fKKKKc+jlelBbMux6CP386lC2TRRQBn/2Q==" alt="Descripción de la imagen" width="500">
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop